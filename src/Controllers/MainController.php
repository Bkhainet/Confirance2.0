<?php 

namespace Example\Controllers;

require __DIR__ . '/config/database_config.php';
require __DIR__ . '/download_and_check_image.php';
require __DIR__ . '/Template_Twig.php';

use Template_Twig;
use PDO;

class MainController
{
    public function post_form_1()
    {  
        $firstname = filter_var(trim($_POST['firstname']),
        FILTER_SANITIZE_STRING);
        $lastname = filter_var(trim($_POST['lastname']),
        FILTER_SANITIZE_STRING);
        $birthdate = filter_var(trim($_POST['birthdate']),
        FILTER_SANITIZE_STRING);
        $report_subject = filter_var(trim($_POST['report_subject']),
        FILTER_SANITIZE_STRING);
        $country = filter_var(trim($_POST['country']),
        FILTER_SANITIZE_STRING);
        $phone = filter_var(trim($_POST['phone']),
        FILTER_SANITIZE_NUMBER_INT);
        $email = filter_var(trim($_POST['email']),
        FILTER_SANITIZE_EMAIL);

        $con = connection_PDO();

        $stmt = $con->prepare("INSERT INTO profile_invited (firstname, lastname, birthdate, report_subject, country, phone, email, company, position, about_me, photo)
        VALUES (:firstname, :lastname, :birthdate, :report_subject, :country, :phone, :email, :company, :position, :about_me, :photo)");

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':report_subject', $report_subject);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':about_me', $about_me);
        $stmt->bindParam(':photo', $photo);
        $stmt->execute();

        $tw = Template_Twig::twig();
        echo $tw->render("Form2.html", array('firstname' => $firstname, 
                                                'lastname' => $lastname, 
                                                'birthdate' => $birthdate, 
                                                'report_subject' => $report_subject, 
                                                'country' => $country, 
                                                'phone' => $phone, 
                                                'email' => $email));
    }

    public function post_form_2()
    {  
        $company = filter_var(trim($_POST['company']),
        FILTER_SANITIZE_STRING);
        $position = filter_var(trim($_POST['position']),
        FILTER_SANITIZE_STRING);
        $about_me = filter_var(trim($_POST['about_me']),
        FILTER_SANITIZE_STRING);
        $photo = download_and_check_image();

        $con = connection_PDO();

        $stmt = $con->prepare("UPDATE profile_invited SET company = :company, position = :position, about_me = :about_me, photo = :photo 
        WHERE id ORDER BY id DESC LIMIT 1");

        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':about_me', $about_me);
        $stmt->bindParam(':photo', $photo);
        $stmt->execute();

        $show= $this->Social_networks();
    }
    public function Social_networks()
    {
        $share_config = include(__DIR__ . '/config/share_config.php');
        $tw = Template_Twig::twig();
        echo $tw->render("Social_networks.html", array('link' => $share_config['link'], 'text' => $share_config['text']));

    }
    public function All()
    {
        $con = connection_PDO();
        $sth = $con->prepare('SELECT * FROM profile_invited'); 
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);

        $tw = Template_Twig::twig();
        echo $tw->render("All.html", array('array' => $array));
    }
    public function first()
    {
        $tw = Template_Twig::twig();
        echo $tw->render("Form1.html");
    }
}
?>
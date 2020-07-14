<?php
    function connection_PDO()
    {
        $host = 'localhost'; // адрес сервера 
        $database = 'registration'; // имя базы данных
        $user = 'root'; // имя пользователя
        $password = 'pass'; // пароль
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("set names utf8");
        return $db;
	}
?>

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Form1.html */
class __TwigTemplate_cfaa56d146fd5932d52d47b1ef3945a9c849666d763e98796ecdd59475ddcbc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../../../favicon.ico\">

    <title>To participate in the conference, please fill out the form</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!---->
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://jqueryui.com/resources/demos/style.css\">
    <link href=\"css/map.css\" rel=\"stylesheet\">
    

</head>

<body class=\"bg-light\">
    <div id=\"map\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 order-md-1\">
                    <hr class=\"mb-4\">
                <form class=\"needs-validation\" action=\"/Form1\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"firstName\">First name</label>
                            <input type=\"text\" name=\"firstname\" class=\"form-control ntSaveForms\" id=\"firstName\" value=\"\" required oninvalid=\"this.setCustomValidity('Please enter the First name field!')\" oninput=\"setCustomValidity('')\">

                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"lastName\">Last name</label>
                            <input type=\"text\" name=\"lastname\" class=\"form-control ntSaveForms\" id=\"lastName\" value=\"\" required oninvalid=\"this.setCustomValidity('Please enter the Last name field!')\" oninput=\"setCustomValidity('')\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"Birthdate\">Birthdate</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"birthdate\" class=\"form-control ntSaveForms\" id=\"datepicker\" value=\"\" required oninvalid=\"this.setCustomValidity('Please enter the Birthdate field!')\" oninput=\"setCustomValidity('')\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"Report Subject\">Report Subject</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"report_subject\" class=\"form-control ntSaveForms\" value=\"\" required oninvalid=\"this.setCustomValidity('Please enter the Report Subject field!')\" oninput=\"setCustomValidity('')\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"country\">Country</label>
                        <select class=\"custom-select d-block ntSaveForms\" name=\"country\" id=\"country\" value=\"\" required oninvalid=\"this.setCustomValidity('Please enter the Country field!')\" oninput=\"setCustomValidity('')\">
                            <option value=\"\">Choose...</option>
                            <option>United States</option>
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"address\">Phone</label>
                        <input type=\"text\" name=\"phone\" class=\"form-control tel ntSaveForms\" value=\"\" required oninvalid=\"this.setCustomValidity('Please enter the Phone field!!')\" oninput=\"setCustomValidity('')\">
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\">Email</label>
                        <div class=\"input-group\">
                        <input type=\"email\" name=\"email\" class=\"form-control ntSaveForms\" value=\"\" required oninvalid=\"this.setCustomValidity('Please enter the Email field!!')\" oninput=\"setCustomValidity('')\">
                        </div>
                    </div>
                    <hr class=\"mb-4\">
                    <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">NEXT</button>
                </form>
            </div>
        </div>
    </div>


    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <!--    -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAfc_huPCqyPtBpWdWd3O0T2FRNFOF8EMc&callback=initMap\"></script>

    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"js/datepicker.js\"></script>
    <script src=\"js/bootstrap.js\"></script>
    <script src=\"js/googlemaps.js\"></script>
    <script src=\"js/telefone_number.js\"></script>
    <script type='text/javascript' src=\"js/ntsaveforms.js\"></script>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "Form1.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Form1.html", "C:\\Users\\Michal\\Desktop\\SOURCE_HOPE\\src\\templates\\Form1.html");
    }
}

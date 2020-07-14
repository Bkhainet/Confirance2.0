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

/* Form2.html */
class __TwigTemplate_1ace305f9616c95556423a0025d7c64a55230010de6e8875c9a8ce71b46591fe extends Template
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
                <form class=\"needs-validation\" action=\"/Form2\" method=\"post\" enctype=\"multipart/form-data\" novalidate>

                    <div class=\"mb-3\">
                        <label for=\"Company\">Company</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"company\" class=\"form-control ntSaveForms\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"Position\">Position</label>
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"position\" class=\"form-control ntSaveForms\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"exampleFormControlTextarea1\">About me</label>
                        <textarea class=\"form-control ntSaveForms\" name=\"about_me\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                        
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"Photo\">Photo</label>
                        <div class=\"input-group\">
                            <input class=\"form-control ntSaveForms\" type=\"file\" name=\"upload\">
                        </div>

                    </div>
                    <hr class=\"mb-4\">
                    <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">NEXT</button>
                </form>
            </div>
        </div>
    </div>

    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAfc_huPCqyPtBpWdWd3O0T2FRNFOF8EMc&callback=initMap\"></script>
    <script src=\"js/googlemaps.js\"></script>
    <script type='text/javascript' src=\"js/ntsaveforms.js\"></script>

</body></html>
";
    }

    public function getTemplateName()
    {
        return "Form2.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Form2.html", "C:\\Users\\Michal\\Desktop\\SOURCE_HOPE\\src\\templates\\Form2.html");
    }
}

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

/* Social_networks.html */
class __TwigTemplate_22d6902938db90c97e2b79b03b49050715620970f50dc06f5f96ac071a0be699 extends Template
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

    <title>To participate in the conference, please fill out the form</title>

    <!-- Bootstrap core CSS -->
    <!---->
    <link href=\"https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://jqueryui.com/resources/demos/style.css\">

    <link href=\"css/map.css\" rel=\"stylesheet\">
    <link href=\"css/share.css\" rel=\"stylesheet\">


</head>

<body>

<div id =\"map\"></div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\"></div>
            <div class=\"col\">
                <div class=\"share-btns\">
                    <a class=\"facebook\" rel=\"nofollow\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 31
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" onclick=\"window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\"></a>
                    <a class=\"twitter\" rel=\"nofollow\" href=\"http://twitter.com/share?&url=";
        // line 32
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "&text=";
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "\" onclick=\"window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\"></a>
                </div>
            </div>
            <div class=\"col\">
                <form class=\"needs-validation\" action=\"/All\" method=\"get\">
                    <button class=\"btn btn-primary\" type=\"submit\">ALL MEMBERS</button>
                </form>
            </div>
            <div class=\"col\"></div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <!--    -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAfc_huPCqyPtBpWdWd3O0T2FRNFOF8EMc&callback=initMap\"></script>
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"js/googlemaps.js\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "Social_networks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  69 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Social_networks.html", "C:\\Users\\Michal\\Desktop\\SOURCE_HOPE\\src\\templates\\Social_networks.html");
    }
}

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

/* All.html */
class __TwigTemplate_325cee449dbcdeb849c6fb7f1a68605e735190fc8ad4a3e6f00d90e3bfabc1fb extends Template
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
        echo "
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.0.1\">
    <title>To participate in the conference, please fill out the form</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.5/examples/blog/\">

    <!-- Bootstrap core CSS -->
<link href=\"https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:700,900\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
  </head>
  <body>
    <div class=\"container\">


  <div class=\"row mb-2\">
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "    <div class=\"col-md-6\">
      <div class=\"row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
        <div class=\"col p-4 d-flex flex-column position-static\">
          <h3 class=\"mb-0\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "lastname", [], "any", false, false, false, 30), "html", null, true);
            echo "</h3>
          <div class=\"mb-1 text-muted\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
          <p class=\"card-text mb-auto\">
              ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "report_subject", [], "any", false, false, false, 33), "html", null, true);
            echo "
            </p>
          <a href=\"#\" class=\"stretched-link\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
            <img class=\"bd-placeholder-img\" width=\"200\" height=\"250\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" src=\"pics/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "photo", [], "any", false, false, false, 38), "html", null, true);
            echo "\" onError=\"this.src='pics/default-user.png'\" alt=\"user_photo\">
        </div>
      </div>
    </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </div>
</div>
  <hr class=\"mb-4\">
  <form class=\"needs-validation\" action=\"/\" method=\"get\" enctype=\"multipart/form-data\" novalidate>
    <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Fill out a new form</button>
  </form>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "All.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  95 => 38,  89 => 35,  84 => 33,  79 => 31,  73 => 30,  68 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "All.html", "C:\\Users\\Michal\\Desktop\\SOURCE_HOPE\\src\\templates\\All.html");
    }
}

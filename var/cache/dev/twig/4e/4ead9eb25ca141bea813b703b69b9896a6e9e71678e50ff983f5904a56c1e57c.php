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

/* inc/pagination.html.twig */
class __TwigTemplate_1b75c3c9cb9b5a999cf06b04e53b9e20da62443d47a1fddd9593482bd442a2e2 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/pagination.html.twig"));

        // line 1
        $context["currentPage"] = (twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "stats", [], "any", false, false, false, 1), "offset", [], "any", false, false, false, 1) / 50)) + 1);
        // line 2
        $context["totalPages"] = twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "stats", [], "any", false, false, false, 2), "total", [], "any", false, false, false, 2) / 50));
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "stats", [], "any", false, false, false, 3), "offset", [], "any", false, false, false, 3) == 0)) {
            // line 4
            $context["firstPage"] = "first-page";
        } else {
            // line 6
            $context["firstPage"] = "";
        }
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "stats", [], "any", false, false, false, 8), "offset", [], "any", false, false, false, 8) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 8, $this->source); })()))) {
            // line 9
            $context["lastPage"] = "last-page";
        } else {
            // line 11
            $context["lastPage"] = "";
        }
        // line 13
        echo "
";
        // line 14
        $context["previousPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 14, $this->source); })()) - 1);
        // line 15
        $context["nextPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 15, $this->source); })()) + 1);
        // line 16
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route"], "method", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route_params"], "method", false, false, false, 16));
        // line 17
        echo "

<div class=\"pagination-section\">
    <a class=\"pagination-button ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["firstPage"]) || array_key_exists("firstPage", $context) ? $context["firstPage"] : (function () { throw new RuntimeError('Variable "firstPage" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" href=";
        echo twig_escape_filter($this->env, (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 20, $this->source); })()) . "?page=") . (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 20, $this->source); })())), "html", null, true);
        echo ">
      <img class=\"pagination-img\" src=\"http://localhost/coinwatch/public/img/arrow-left.svg\"> </img>
    </a>
  <span class=\"pages-info\">Page ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</span>
   <a class=\"pagination-button ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" href=";
        echo twig_escape_filter($this->env, (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 24, $this->source); })()) . "?page=") . (isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 24, $this->source); })())), "html", null, true);
        echo ">
      <img class=\"pagination-img\" src=\"http://localhost/coinwatch/public/img/arrow-right.svg\"> </img>
    </a>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  82 => 23,  74 => 20,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  60 => 13,  57 => 11,  54 => 9,  52 => 8,  49 => 6,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentPage = (data.stats.offset / 50) | round + 1 %}
{% set totalPages = (data.stats.total / 50) | round %}
{% if data.stats.offset == 0  %}
{% set firstPage = \"first-page\" %}
{% else %}
{% set firstPage = \"\" %}
{% endif %}
{% if data.stats.offset == totalPages %}
{% set lastPage = \"last-page\" %}
{% else %}
{% set lastPage = \"\" %}
{% endif %}

{% set previousPage = currentPage - 1 %}
{% set nextPage = currentPage + 1 %}
{% set currentPath = path(app.request.attributes.get('_route'),app.request.attributes.get('_route_params')) %}


<div class=\"pagination-section\">
    <a class=\"pagination-button {{firstPage}}\" href={{currentPath ~ \"?page=\" ~ previousPage }}>
      <img class=\"pagination-img\" src=\"http://localhost/coinwatch/public/img/arrow-left.svg\"> </img>
    </a>
  <span class=\"pages-info\">Page {{currentPage}} of {{totalPages}}</span>
   <a class=\"pagination-button {{lastPage}}\" href={{currentPath ~ \"?page=\" ~ nextPage }}>
      <img class=\"pagination-img\" src=\"http://localhost/coinwatch/public/img/arrow-right.svg\"> </img>
    </a>
</div>", "inc/pagination.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\inc\\pagination.html.twig");
    }
}

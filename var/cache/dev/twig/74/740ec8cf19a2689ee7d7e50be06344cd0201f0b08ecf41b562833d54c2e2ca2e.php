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

/* inc/search.html.twig */
class __TwigTemplate_f045491338f530b67ff7f6e2078da6572a3e5503f707b28daab195ffc86e20b0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/search.html.twig"));

        // line 1
        echo "<div class=\"search-content\">    
    <div class=\"search-bar\">
        <input type=\"search\" class=\"form-control\" placeholder=\"Search...\" name=\"searchBar\">
    </div>

    <div class=\"search-results\">
        <div class=\"search-label\" id=\"coins-search-header\"></div>
            <div id=\"coins-results\"></div>
        <div class=\"search-label\" id=\"exchanges-search-header\"></div>
            <div id=\"exchanges-results\"></div>
    </div>
</div>    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"search-content\">    
    <div class=\"search-bar\">
        <input type=\"search\" class=\"form-control\" placeholder=\"Search...\" name=\"searchBar\">
    </div>

    <div class=\"search-results\">
        <div class=\"search-label\" id=\"coins-search-header\"></div>
            <div id=\"coins-results\"></div>
        <div class=\"search-label\" id=\"exchanges-search-header\"></div>
            <div id=\"exchanges-results\"></div>
    </div>
</div>    

", "inc/search.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\inc\\search.html.twig");
    }
}

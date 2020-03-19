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

/* inc/navbar.html.twig */
class __TwigTemplate_5ee7282482a4f57c9e57e34e7a9a25a20d92c5cf4fd5039bf5f6b2e5b1e02bfc extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"http://localhost/coinwatch/public/\"><img src=\"http://localhost/coinwatch/public/img/logo.png\"></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"http://localhost/coinwatch/public/\">Cryptocurrencies</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"http://localhost/coinwatch/public/exchanges\">Exchanges</a>
      </li>                     
    </ul>
     ";
        // line 16
        echo twig_include($this->env, $context, "inc/search.html.twig");
        echo "  
  </div>
</nav>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"http://localhost/coinwatch/public/\"><img src=\"http://localhost/coinwatch/public/img/logo.png\"></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"http://localhost/coinwatch/public/\">Cryptocurrencies</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"http://localhost/coinwatch/public/exchanges\">Exchanges</a>
      </li>                     
    </ul>
     {{ include(\"inc/search.html.twig\") }}  
  </div>
</nav>
</nav>", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\inc\\navbar.html.twig");
    }
}

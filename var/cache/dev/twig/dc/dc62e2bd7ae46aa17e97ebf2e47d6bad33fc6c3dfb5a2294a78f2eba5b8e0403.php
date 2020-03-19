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

/* exchangeList.html.twig */
class __TwigTemplate_d52d072e808a31c47586a5e8612e8a44bc0a91c11a2eebc17ab83fea4330f7e7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exchangeList.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../style/style.css\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
       
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Exchanges</th>
            <th>24h trade volume</th>
            <th>Markets</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exchange"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "rank", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>
                <img class=\"coin-logo\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "iconUrl", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                <div class=\"coin-name\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
            </td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "volume", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "numberOfMarkets", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exchange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>

    </body>
</html>



       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CoinWatch!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "exchangeList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 7,  120 => 5,  104 => 32,  95 => 29,  91 => 28,  86 => 26,  82 => 25,  77 => 23,  74 => 22,  70 => 21,  55 => 8,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}CoinWatch!{% endblock %}</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../style/style.css\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
       
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Exchanges</th>
            <th>24h trade volume</th>
            <th>Markets</th>
        </tr>
    </thead>
    <tbody>
        {% for exchange in data %}
        <tr>
            <td>{{ exchange.rank}}</td>
            <td>
                <img class=\"coin-logo\" src=\"{{exchange.iconUrl}}\">
                <div class=\"coin-name\">{{exchange.name}}</div>
            </td>
            <td>{{ exchange.volume  }}</td>
            <td>{{ exchange.numberOfMarkets}}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>

    </body>
</html>



       
", "exchangeList.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\exchangeList.html.twig");
    }
}

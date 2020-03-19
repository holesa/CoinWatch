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

/* exchangesList.html.twig */
class __TwigTemplate_97ea5be0805acaf8deceae14de763f7faa98365a88e0ecefb1486194b7a94214 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exchangesList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exchangesList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"content\"> 
    <div class=\"header-text\">
        <h2 class=\"header-title\">All cryptocurrency exchanges</h2>
        <p class=\"header-desc\">Compare all 287 cryptocurrency exchange platforms, apps and brokers ranked by trading volume.</p>
    </div>      
        <table class=\"table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Exchanges</th>
                    <th>24h Trade Volume</th>
                    <th class=\"mobile-hide\">Markets</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "exchanges", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["exchange"]) {
            // line 20
            echo "                <tr class=\"table-row\">
                    <td class=\"table-cell\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "rank", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td class=\"table-cell\">
                        <img class=\"item-sm-logo\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "iconUrl", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                        <div class=\"item-name\"><a href=\"exchange/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["exchange"], "name", [], "any", false, false, false, 24), [" " => ""])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></div>
                    </td>
                    <td class=\"table-cell\">";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "volume", [], "any", false, false, false, 26), 2, ".", ","), "html", null, true);
            echo "</td>
                    <td class=\"table-cell mobile-hide\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "numberOfMarkets", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exchange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>
</div>


";
        // line 35
        $this->loadTemplate("inc/pagination.html.twig", "exchangesList.html.twig", 35)->display($context);
        // line 36
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "exchangesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  122 => 35,  115 => 30,  106 => 27,  102 => 26,  93 => 24,  89 => 23,  84 => 21,  81 => 20,  77 => 19,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

<div class=\"content\"> 
    <div class=\"header-text\">
        <h2 class=\"header-title\">All cryptocurrency exchanges</h2>
        <p class=\"header-desc\">Compare all 287 cryptocurrency exchange platforms, apps and brokers ranked by trading volume.</p>
    </div>      
        <table class=\"table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Exchanges</th>
                    <th>24h Trade Volume</th>
                    <th class=\"mobile-hide\">Markets</th>
                </tr>
            </thead>
            <tbody>
                {% for exchange in data.exchanges %}
                <tr class=\"table-row\">
                    <td class=\"table-cell\">{{ exchange.rank}}</td>
                    <td class=\"table-cell\">
                        <img class=\"item-sm-logo\" src=\"{{exchange.iconUrl}}\">
                        <div class=\"item-name\"><a href=\"exchange/{{exchange.id}}+{{exchange.name|replace({\" \":\"\"})|lower}}\">{{exchange.name}}</a></div>
                    </td>
                    <td class=\"table-cell\">{{ exchange.volume | number_format (2,\".\",\",\")  }}</td>
                    <td class=\"table-cell mobile-hide\">{{ exchange.numberOfMarkets}}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
</div>


{% include \"inc/pagination.html.twig\" %}


{% endblock %}



       
", "exchangesList.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\exchangesList.html.twig");
    }
}

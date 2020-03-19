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

/* coinsList.html.twig */
class __TwigTemplate_a29307462e675d7495fdbd674f8435e79fd12f69dd6705a29947d9fbd8e70402 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coinsList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coinsList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"content\"> 
    <div class=\"header-text\">
        <h2 class=\"header-title\">Prices of all cryptocurrencies</h2>
        <p class=\"header-desc\">View current prices, exchanges and charts of 10,043 cryptocurrencies.</p>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>#</th>
                <th>Cryptocurrency</th>
                <th>Price</th>
                <th class=\"mobile-hide\">Market Cap</th>
                <th class=\"mobile-hide\">24h Change</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "coins", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["coin"]) {
            // line 22
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["coin"], "change", [], "any", false, false, false, 22) > 0)) {
                // line 23
                echo "            ";
                $context["dataColor"] = "positive";
                // line 24
                echo "            ";
            } else {
                // line 25
                echo "            ";
                $context["dataColor"] = "negative";
                // line 26
                echo "            ";
            }
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coin"], "rank", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>
                    <img class=\"item-sm-logo\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coin"], "iconUrl", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                    <div class=\"item-name\"><a href=\"coin/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coin"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["coin"], "name", [], "any", false, false, false, 31), [" " => ""])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coin"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></div>
                </td>
                <td>\$ ";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coin"], "price", [], "any", false, false, false, 33), 2, ".", ","), "html", null, true);
            echo "</td>
                <td class=\"mobile-hide\">\$ ";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coin"], "marketCap", [], "any", false, false, false, 34), 2, ".", ","), "html", null, true);
            echo "</td>
                <td class=\"mobile-hide ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["dataColor"]) || array_key_exists("dataColor", $context) ? $context["dataColor"] : (function () { throw new RuntimeError('Variable "dataColor" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coin"], "change", [], "any", false, false, false, 35), "html", null, true);
            echo "%</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
</div>    

";
        // line 42
        $this->loadTemplate("inc/pagination.html.twig", "coinsList.html.twig", 42)->display($context);
        // line 43
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "coinsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  143 => 42,  137 => 38,  126 => 35,  122 => 34,  118 => 33,  109 => 31,  105 => 30,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  88 => 24,  85 => 23,  82 => 22,  78 => 21,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"content\"> 
    <div class=\"header-text\">
        <h2 class=\"header-title\">Prices of all cryptocurrencies</h2>
        <p class=\"header-desc\">View current prices, exchanges and charts of 10,043 cryptocurrencies.</p>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>#</th>
                <th>Cryptocurrency</th>
                <th>Price</th>
                <th class=\"mobile-hide\">Market Cap</th>
                <th class=\"mobile-hide\">24h Change</th>
            </tr>
        </thead>
        <tbody>
            {% for coin in data.coins %}
            {% if coin.change > 0 %}
            {% set dataColor = \"positive\" %}
            {% else %}
            {% set dataColor = \"negative\" %}
            {% endif %}
            <tr>
                <td>{{ coin.rank}}</td>
                <td>
                    <img class=\"item-sm-logo\" src=\"{{coin.iconUrl}}\">
                    <div class=\"item-name\"><a href=\"coin/{{coin.id}}+{{coin.name|replace({\" \":\"\"})|lower}}\">{{coin.name}}</a></div>
                </td>
                <td>\$ {{ coin.price | number_format (2,\".\",\",\") }}</td>
                <td class=\"mobile-hide\">\$ {{ coin.marketCap | number_format (2,\".\",\",\")}}</td>
                <td class=\"mobile-hide {{dataColor}}\">{{ coin.change}}%</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>    

{% include \"inc/pagination.html.twig\" %}


{% endblock %}", "coinsList.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\coinsList.html.twig");
    }
}

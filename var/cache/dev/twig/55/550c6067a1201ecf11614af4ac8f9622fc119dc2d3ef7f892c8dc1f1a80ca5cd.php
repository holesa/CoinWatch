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

/* exchange.html.twig */
class __TwigTemplate_76dcd94e18921ef3845bd23d2bdfe5658d6d46712bd431dd8995d836fd5098c5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exchange.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exchange.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CoinWatch ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exchange"]) {
            // line 6
            if ((twig_get_attribute($this->env, $this->source, $context["exchange"], "id", [], "any", false, false, false, 6) == (isset($context["exchangeId"]) || array_key_exists("exchangeId", $context) ? $context["exchangeId"] : (function () { throw new RuntimeError('Variable "exchangeId" does not exist.', 6, $this->source); })()))) {
                // line 7
                echo "
<div class=\"content\"> 
    <div class=\"item-section item-profile\">
    
        <div class=\"left-side\">
            <img class=\"item-md-logo\" src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "iconUrl", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
            <div>
            ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "
            </div>
        </div> 

        <div class=\"right-side\">
            <div> Rank ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "rank", [], "any", false, false, false, 19), "html", null, true);
                echo "</div>  
        </div>        
    </div>

";
                // line 23
                if ((twig_get_attribute($this->env, $this->source, $context["exchange"], "description", [], "any", false, false, false, 23) != null)) {
                    // line 24
                    echo "    <div class=\"item-section item-description\">
        <div class=\"item-heading\">What is ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "name", [], "any", false, false, false, 25), "html", null, true);
                    echo "?</div>
        <p>";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["exchange"], "description", [], "any", false, false, false, 26);
                    echo "</p>
    </div>
";
                }
                // line 28
                echo "   

    <div class=\"item-section item-details\">
        <div class=\"item-heading\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo " Details</div>
            <div>
                <div class=\"caption\">24h Trade Volume:</div>
                \$ ";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "volume", [], "any", false, false, false, 34), 2, ".", ","), "html", null, true);
                echo "
            </div>

            <div>
                <div class=\"caption\">Market Share:</div>
                \$ ";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "marketShare", [], "any", false, false, false, 39), 2, ".", ","), "html", null, true);
                echo " 
            </div>
    </div> 

    <div class=\"item-section item-links\">
                <div class=\"item-heading\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo " Links</div>
                    <div>
                        <i class=\"fas fa-external-link-alt\"></i><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "websiteUrl", [], "any", false, false, false, 46), "html", null, true);
                echo "\" target=\"_blank\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exchange"], "websiteUrl", [], "any", false, false, false, 46), "html", null, true);
                echo "</a>
                    </div>
    </div>
</div> 



";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exchange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "exchange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  153 => 46,  148 => 44,  140 => 39,  132 => 34,  126 => 31,  121 => 28,  115 => 26,  111 => 25,  108 => 24,  106 => 23,  99 => 19,  91 => 14,  86 => 12,  79 => 7,  77 => 6,  73 => 5,  66 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}CoinWatch {% endblock %}
{% block body %}
{% for exchange in data %}
{% if exchange.id == exchangeId %}

<div class=\"content\"> 
    <div class=\"item-section item-profile\">
    
        <div class=\"left-side\">
            <img class=\"item-md-logo\" src=\"{{exchange.iconUrl}}\">
            <div>
            {{exchange.name}}
            </div>
        </div> 

        <div class=\"right-side\">
            <div> Rank {{exchange.rank}}</div>  
        </div>        
    </div>

{% if exchange.description != null %}
    <div class=\"item-section item-description\">
        <div class=\"item-heading\">What is {{exchange.name}}?</div>
        <p>{{exchange.description | raw}}</p>
    </div>
{% endif %}   

    <div class=\"item-section item-details\">
        <div class=\"item-heading\">{{exchange.name}} Details</div>
            <div>
                <div class=\"caption\">24h Trade Volume:</div>
                \$ {{exchange.volume | number_format (2,\".\",\",\")}}
            </div>

            <div>
                <div class=\"caption\">Market Share:</div>
                \$ {{exchange.marketShare | number_format (2,\".\",\",\")}} 
            </div>
    </div> 

    <div class=\"item-section item-links\">
                <div class=\"item-heading\">{{exchange.name}} Links</div>
                    <div>
                        <i class=\"fas fa-external-link-alt\"></i><a href=\"{{exchange.websiteUrl}}\" target=\"_blank\"> {{exchange.websiteUrl}}</a>
                    </div>
    </div>
</div> 



{% endif %}
{% endfor %}

{% endblock %}
", "exchange.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\exchange.html.twig");
    }
}

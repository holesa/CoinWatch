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

/* coin.html.twig */
class __TwigTemplate_2b8c4c1aec3a9fbf2432e4864802ba62a4c304bf032d7bf1200e6dca4d1765e2 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coin.html.twig", 1);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "change", [], "any", false, false, false, 4) > 0)) {
            // line 5
            $context["dataColor"] = "positive";
        } else {
            // line 7
            $context["dataColor"] = "negative";
        }
        // line 9
        echo "
       
       <div class=\"content\"> 
            <div class=\"item-section item-profile\">

                <div class=\"left-side\">
                    <img class=\"item-md-logo\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "iconUrl", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
                    <div>
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "symbol", [], "any", false, false, false, 17), "html", null, true);
        echo "
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "
                    </div>
                </div> 

                <div class=\"right-side\">
                    <div> Rank ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "rank", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                    <div>\$ ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), 2, ".", ","), "html", null, true);
        echo " </div>
                    <div class=";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["dataColor"]) || array_key_exists("dataColor", $context) ? $context["dataColor"] : (function () { throw new RuntimeError('Variable "dataColor" does not exist.', 25, $this->source); })()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "change", [], "any", false, false, false, 25), "html", null, true);
        echo "%</div>
                </div>    
                
            </div>

";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30) != null)) {
            // line 31
            echo "            <div class=\"item-section item-description\">
                <div class=\"item-heading\">What is ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "?</div>
                <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
            </div>
";
        }
        // line 36
        echo "
            <div class=\"item-section item-details\">
                <div class=\"item-heading\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
        echo " Details</div>
                    <div>
                        <div class=\"caption\">All time high:</div>
                        \$ ";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "allTimeHigh", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41), 2, ".", ","), "html", null, true);
        echo "
                    </div>

                    <div>
                        <div class=\"caption\">Market cap:</div>
                        \$ ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "marketCap", [], "any", false, false, false, 46), 2, ".", ","), "html", null, true);
        echo " 
                    </div>

                    <div>
                        <div class=\"caption\">24h trade volume:</div>
                        \$ ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "volume", [], "any", false, false, false, 51), 2, ".", ","), "html", null, true);
        echo " 
                    </div>

                    <div>
                        <div class=\"caption\">Total supply:</div>
                        ";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "totalSupply", [], "any", false, false, false, 56), 2, ".", ","), "html", null, true);
        echo " 
                    </div>

                    <div>
                        <div class=\"caption\">Circulating supply</div>
                        ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "circulatingSupply", [], "any", false, false, false, 61), 2, ".", ","), "html", null, true);
        echo " 
                    </div>
            </div>    

            <div class=\"item-section item-links\">
                <div class=\"item-heading\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), "html", null, true);
        echo " Links</div>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "links", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["web"]) {
            // line 68
            echo "                    <div>
                        <i class=\"fas fa-external-link-alt\"></i><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["web"], "url", [], "any", false, false, false, 69), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["web"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['web'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "coin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 72,  186 => 69,  183 => 68,  179 => 67,  175 => 66,  167 => 61,  159 => 56,  151 => 51,  143 => 46,  135 => 41,  129 => 38,  125 => 36,  119 => 33,  115 => 32,  112 => 31,  110 => 30,  100 => 25,  96 => 24,  92 => 23,  84 => 18,  80 => 17,  75 => 15,  67 => 9,  64 => 7,  61 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
{% if data.change > 0 %}
{% set dataColor = \"positive\" %}
{% else %}
{% set dataColor = \"negative\" %}
{% endif %}

       
       <div class=\"content\"> 
            <div class=\"item-section item-profile\">

                <div class=\"left-side\">
                    <img class=\"item-md-logo\" src=\"{{data.iconUrl}}\">
                    <div>
                    {{data.symbol}}
                    {{data.name}}
                    </div>
                </div> 

                <div class=\"right-side\">
                    <div> Rank {{data.rank}}</div>
                    <div>\$ {{data.price | number_format (2,\".\",\",\")}} </div>
                    <div class={{dataColor}}>{{data.change}}%</div>
                </div>    
                
            </div>

{% if data.description != null %}
            <div class=\"item-section item-description\">
                <div class=\"item-heading\">What is {{data.name}}?</div>
                <p>{{data.description}}</p>
            </div>
{% endif %}

            <div class=\"item-section item-details\">
                <div class=\"item-heading\">{{data.name}} Details</div>
                    <div>
                        <div class=\"caption\">All time high:</div>
                        \$ {{data.allTimeHigh.price | number_format (2,\".\",\",\")}}
                    </div>

                    <div>
                        <div class=\"caption\">Market cap:</div>
                        \$ {{data.marketCap | number_format (2,\".\",\",\")}} 
                    </div>

                    <div>
                        <div class=\"caption\">24h trade volume:</div>
                        \$ {{data.volume | number_format (2,\".\",\",\")}} 
                    </div>

                    <div>
                        <div class=\"caption\">Total supply:</div>
                        {{data.totalSupply | number_format (2,\".\",\",\")}} 
                    </div>

                    <div>
                        <div class=\"caption\">Circulating supply</div>
                        {{data.circulatingSupply | number_format (2,\".\",\",\")}} 
                    </div>
            </div>    

            <div class=\"item-section item-links\">
                <div class=\"item-heading\">{{data.name}} Links</div>
                {% for web in data.links %}
                    <div>
                        <i class=\"fas fa-external-link-alt\"></i><a href=\"{{web.url}}\" target=\"_blank\"> {{web.name}}</a>
                    </div>
                {% endfor %}
        </div>
    </div>

{% endblock %}", "coin.html.twig", "C:\\xampp\\htdocs\\coinWatch\\templates\\coin.html.twig");
    }
}

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

/* menu/index.html.twig */
class __TwigTemplate_6cae6b72e9bf1e7486a69537b9c30e03853d80b417d8876a5cd1bd007bf093db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menu/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MenuController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 7
            echo "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">            
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>\t\t\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <section class=\"playlist-section spad\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Dishes</h2>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t    ";
        // line 18
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 18, $this->source); })())), 0))) {
            // line 19
            echo "\t\t\t\t\t<ul class=\"playlist-filter controls\">
\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 21
                echo "\t\t\t\t\t\t\t<li class=\"control\" data-filter=\".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t\t<li class=\"control\" data-filter=\"all\">All Dishes</li>
\t\t\t\t\t</ul>
                ";
        }
        // line 26
        echo "\t\t\t</div>                      
\t\t\t<div class=\"clearfix\"></div>\t\t\t
\t\t\t<div class=\"row playlist-area\">
\t\t\t\t";
        // line 29
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 29, $this->source); })())), 0))) {
            // line 30
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dishes"]) || array_key_exists("dishes", $context) ? $context["dishes"] : (function () { throw new RuntimeError('Variable "dishes" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dish"]) {
                // line 31
                echo "\t\t\t\t\t\t<div class=\"mix col-lg-3 col-md-4 col-sm-6 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "category", [], "any", false, false, false, 31), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"playlist-item\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, $context["dish"], "image", [], "any", false, false, false, 33))), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<h5>";
                // line 34
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "name", [], "any", false, false, false, 34)), "html", null, true);
                echo " -  &#x20b9;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "price", [], "any", false, false, false, 34), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<p>Order no. ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn btn-danger btn-sm\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_dish", ["id" => twig_get_attribute($this->env, $this->source, $context["dish"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">Order</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t";
        }
        echo "\t
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 40,  171 => 36,  167 => 35,  161 => 34,  157 => 33,  151 => 31,  146 => 30,  144 => 29,  139 => 26,  134 => 23,  123 => 21,  119 => 20,  116 => 19,  114 => 18,  106 => 12,  96 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MenuController!{% endblock %}

{% block body %}
\t{% for msg in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">            
            {{msg}}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>\t\t\t
\t{% endfor %}
    <section class=\"playlist-section spad\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>Dishes</h2>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t    {% if(categories|length > 0) %}
\t\t\t\t\t<ul class=\"playlist-filter controls\">
\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t<li class=\"control\" data-filter=\".{{category.name}}\">{{category.name}}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<li class=\"control\" data-filter=\"all\">All Dishes</li>
\t\t\t\t\t</ul>
                {% endif %}
\t\t\t</div>                      
\t\t\t<div class=\"clearfix\"></div>\t\t\t
\t\t\t<div class=\"row playlist-area\">
\t\t\t\t{% if(dishes|length > 0) %}
\t\t\t\t\t{% for dish in dishes %}
\t\t\t\t\t\t<div class=\"mix col-lg-3 col-md-4 col-sm-6 {{ dish.category }}\">
\t\t\t\t\t\t\t<div class=\"playlist-item\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/images/' ~ dish.image) }}\" alt=\"\">
\t\t\t\t\t\t\t\t<h5>{{ dish.name|capitalize }} -  &#x20b9;{{dish.price}}</h5>
\t\t\t\t\t\t\t\t<p>Order no. {{dish.id}}</p>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn btn-danger btn-sm\" href=\"{{path('order_dish', {id: dish.id})}}\">Order</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}\t
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "menu/index.html.twig", "C:\\xampp\\htdocs\\menukarte\\templates\\menu\\index.html.twig");
    }
}

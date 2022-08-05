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

/* home/index.html.twig */
class __TwigTemplate_019f6ce80a3fe40057bedc514a99ad7c2388dbdab57e76647aec757ba7528903 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Welcome";
        
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
        echo "    <!-- Hero section -->
    <section class=\"hero-section\">
        <div class=\"hero-slider owl-carousel\">                  
            <div class=\"hs-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hs-text\">
                                <h2><span>";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dish1"]) || array_key_exists("dish1", $context) ? $context["dish1"] : (function () { throw new RuntimeError('Variable "dish1" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14)), "html", null, true);
        echo "</span></h2>
                                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        echo "\" class=\"site-btn\">Menu</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"hr-img\">
                                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["dish1"]) || array_key_exists("dish1", $context) ? $context["dish1"] : (function () { throw new RuntimeError('Variable "dish1" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20))), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hs-text\">
                                <h2><span>";
        // line 31
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dish2"]) || array_key_exists("dish2", $context) ? $context["dish2"] : (function () { throw new RuntimeError('Variable "dish2" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31)), "html", null, true);
        echo "</span></h2>
                                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        echo "\" class=\"site-btn\">Menu</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"hr-img\">
                                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["dish2"]) || array_key_exists("dish2", $context) ? $context["dish2"] : (function () { throw new RuntimeError('Variable "dish2" does not exist.', 37, $this->source); })()), "image", [], "any", false, false, false, 37))), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  128 => 32,  124 => 31,  110 => 20,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome{% endblock %}

{% block body %}
    <!-- Hero section -->
    <section class=\"hero-section\">
        <div class=\"hero-slider owl-carousel\">                  
            <div class=\"hs-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hs-text\">
                                <h2><span>{{dish1.name|capitalize}}</span></h2>
                                <a href=\"{{path('app_menu')}}\" class=\"site-btn\">Menu</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"hr-img\">
                                <img src=\"{{asset('uploads/images/'~dish1.image)}}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hs-text\">
                                <h2><span>{{dish2.name|capitalize}}</span></h2>
                                <a href=\"{{path('app_menu')}}\" class=\"site-btn\">Menu</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"hr-img\">
                                <img src=\"{{asset('uploads/images/'~dish2.image)}}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\menukarte\\templates\\home\\index.html.twig");
    }
}

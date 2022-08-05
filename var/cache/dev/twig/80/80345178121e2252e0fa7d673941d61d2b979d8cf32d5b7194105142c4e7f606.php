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

/* mailer/index.html.twig */
class __TwigTemplate_85c497fc320c119254c88f035fbbdb19cc4d57776a8cc5d988afbf36c02845a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mailer/index.html.twig", 1);
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

        echo "Contact";
        
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
        echo "    ";
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
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <section class=\"contact-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-lg-6\">
\t\t\t\t\t<!-- Map -->
\t\t\t\t\t<!--<div class=\"map\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304\" style=\"border:0\" allowfullscreen></iframe></div>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-lg-6\">
\t\t\t\t\t<div class=\"contact-warp\">
\t\t\t\t\t\t<div class=\"section-title mb-0\">
\t\t\t\t\t\t\t<h2>Get in touch</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doe iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Main Road , No 25/11</li>
\t\t\t\t\t\t\t<li>+34 556788 3221</li>
\t\t\t\t\t\t\t<li>contact@solmusic.com</li>
\t\t\t\t\t\t</ul>
                        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 30, $this->source); })()), 'form');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mailer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 30,  106 => 12,  96 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
    {% for msg in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">            
            {{msg}}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
    <section class=\"contact-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-lg-6\">
\t\t\t\t\t<!-- Map -->
\t\t\t\t\t<!--<div class=\"map\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304\" style=\"border:0\" allowfullscreen></iframe></div>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-lg-6\">
\t\t\t\t\t<div class=\"contact-warp\">
\t\t\t\t\t\t<div class=\"section-title mb-0\">
\t\t\t\t\t\t\t<h2>Get in touch</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doe iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Main Road , No 25/11</li>
\t\t\t\t\t\t\t<li>+34 556788 3221</li>
\t\t\t\t\t\t\t<li>contact@solmusic.com</li>
\t\t\t\t\t\t</ul>
                        {{form(contact_form)}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "mailer/index.html.twig", "C:\\xampp\\htdocs\\menukarte\\templates\\mailer\\index.html.twig");
    }
}

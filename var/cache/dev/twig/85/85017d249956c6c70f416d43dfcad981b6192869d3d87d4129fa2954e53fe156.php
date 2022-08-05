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

/* order/index.html.twig */
class __TwigTemplate_64baaeedb922631445222699fd7734853178feee8484a210f6635334c79ab41d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
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

        echo "Hello OrderController!";
        
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
        $context["sum"] = 0;
        // line 7
        echo "<h2>Your orders</h2>
<div class=\"container\">
    <table class=\"table table-stripped\">
        <tr>
            <th>ID</th>
            <th>Name</th>
            ";
        // line 13
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "                <th>Status</th>
            ";
        }
        // line 16
        echo "            <th>Price</th>                      
            <th></th>
            <th></th>
        </tr>
        
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 22
            echo "            <tr>
                ";
            // line 23
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 23, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["order"], "price", [], "any", false, false, false, 23));
            // line 24
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>

                ";
            // line 27
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 28
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                ";
            }
            // line 30
            echo "
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>                
                    <td>
                        ";
            // line 33
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 34
                echo "                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 36), "html", null, true);
                echo "
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">

                                    <li><a class=\"dropdown-item\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 40), "status" => "open"]), "html", null, true);
                echo "\">Open</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 41), "status" => "processing"]), "html", null, true);
                echo "\">Processing</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("status", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 42), "status" => "archived"]), "html", null, true);
                echo "\">Archived</a></li>
                                </ul>
                            </div>
                        ";
            }
            // line 46
            echo "                    </td>
                    <td>
                        ";
            // line 48
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 48), "open")))) {
                // line 49
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">Delete</a>
                        ";
            }
            // line 51
            echo "                    </td>
               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        <tr>
            ";
        // line 57
        $context["colno"] = 3;
        // line 58
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 59
            echo "                ";
            $context["colno"] = 2;
            // line 60
            echo "            ";
        }
        // line 61
        echo "            <th colspan=\"";
        echo twig_escape_filter($this->env, (isset($context["colno"]) || array_key_exists("colno", $context) ? $context["colno"] : (function () { throw new RuntimeError('Variable "colno" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\" style=\"text-align:right\">Total:</th>
            <th> &#x20b9;";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "</th>
            <th></th>
            <th></th>
        </tr>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 62,  210 => 61,  207 => 60,  204 => 59,  201 => 58,  199 => 57,  195 => 55,  186 => 51,  180 => 49,  178 => 48,  174 => 46,  167 => 42,  163 => 41,  159 => 40,  152 => 36,  148 => 34,  146 => 33,  141 => 31,  138 => 30,  132 => 28,  130 => 27,  125 => 25,  120 => 24,  118 => 23,  115 => 22,  111 => 21,  104 => 16,  100 => 14,  98 => 13,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello OrderController!{% endblock %}

{% block body %}
{% set sum = 0 %}
<h2>Your orders</h2>
<div class=\"container\">
    <table class=\"table table-stripped\">
        <tr>
            <th>ID</th>
            <th>Name</th>
            {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                <th>Status</th>
            {% endif %}
            <th>Price</th>                      
            <th></th>
            <th></th>
        </tr>
        
        {% for order in orders %}
            <tr>
                {% set sum = sum + order.price %}
                <td>{{order.id}}</td>
                <td>{{order.name}}</td>

                {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                    <td>{{order.status}}</td>
                {% endif %}

                <td>{{order.price}}</td>                
                    <td>
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <div class=\"dropdown\">
                                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    {{ order.status }}
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">

                                    <li><a class=\"dropdown-item\" href=\"{{ path('status',{id: order.id, status: 'open'}) }}\">Open</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('status',{id: order.id, status: 'processing'}) }}\">Processing</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('status',{id: order.id, status: 'archived'}) }}\">Archived</a></li>
                                </ul>
                            </div>
                        {% endif %}
                    </td>
                    <td>
                        {% if (is_granted('IS_AUTHENTICATED_FULLY')) and (order.status == 'open') %}
                            <a href=\"{{path('order_delete',{id: order.id})}}\" class=\"btn btn-danger btn-sm\">Delete</a>
                        {% endif %}
                    </td>
               
            </tr>
        {% endfor %}

        <tr>
            {% set colno = 3 %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% set colno = 2 %}
            {% endif %}
            <th colspan=\"{{ colno }}\" style=\"text-align:right\">Total:</th>
            <th> &#x20b9;{{ sum }}</th>
            <th></th>
            <th></th>
        </tr>
    </table>
</div>
{% endblock %}
", "order/index.html.twig", "C:\\xampp\\htdocs\\menukarte\\templates\\order\\index.html.twig");
    }
}

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

/* base.html.twig */
class __TwigTemplate_f0793f4d2a89f1fd34770fddd37dd2ebdddd806834c436da6d7ce8ea528e67c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
\t<title>Menukarte | Your restaurent</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"SolMusic HTML Template\">
\t<meta name=\"keywords\" content=\"music, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<!-- Favicon -->
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\"/>

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap\" rel=\"stylesheet\">
 
\t<!-- Stylesheets -->
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>


\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->

</head>
<body>
\t<!-- Page Preloder -->
\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>

\t<!-- Header section -->
\t<header class=\"header-section clearfix\">
\t\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"site-logo\">
\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t</a>
\t\t<div class=\"header-right\">
\t\t\t<div class=\"user-panel\">
\t\t\t\t";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"register\">Logout</a>
\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\" class=\"register\">Register</a>
\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"register\">Login</a>\t\t\t\t\t
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</div> 
\t\t</div>
\t\t<ul class=\"main-menu\">
\t\t\t<li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
\t\t\t<li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail");
        echo "\">Contact</a></li>
\t\t\t";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 56
            echo "\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dish.view");
            echo "\">Dish</a>
\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t<li><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dish.create");
            echo "\">Create</a></li>
\t\t\t\t</ul>
\t\t\t</li>\t\t\t
\t\t\t<li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
            echo "\">Menu</a></li>\t\t\t\t
\t\t\t<li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\">Orders</a></li>\t
\t\t\t";
        }
        // line 64
        echo "\t\t</ul>
\t</header>
\t<!-- Header section end -->

    ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
\t<!-- Intro section -->
\t<section class=\"intro-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<h2>Delicious food</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        echo "\" class=\"site-btn\">Try it now</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Intro section end -->

\t<!-- Footer section -->
\t<footer class=\"footer-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-6 col-lg-7 order-lg-2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>About us</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Welcome</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
        echo "\">Orders</a></li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Menu</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Music</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Subscription</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Custom Music</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Footage</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Playlists</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Newsletter</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Careers</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Press</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6 col-lg-5 order-lg-1\">
\t\t\t\t\t<img src=\"img/logo.png\" alt=\"\">
\t\t\t\t\t<div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a> Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-pinterest\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-youtube\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- Footer section end -->

\t<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "\t
\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 147,  315 => 146,  297 => 68,  284 => 18,  274 => 17,  262 => 149,  260 => 146,  256 => 145,  207 => 99,  203 => 98,  183 => 81,  169 => 69,  167 => 68,  161 => 64,  156 => 62,  152 => 61,  146 => 58,  140 => 56,  138 => 55,  134 => 54,  130 => 53,  125 => 50,  119 => 48,  114 => 46,  109 => 45,  107 => 44,  100 => 40,  96 => 39,  76 => 22,  72 => 21,  69 => 20,  67 => 17,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
\t<title>Menukarte | Your restaurent</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"SolMusic HTML Template\">
\t<meta name=\"keywords\" content=\"music, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<!-- Favicon -->
\t<link href=\"{{asset('img/favicon.ico')}}\" rel=\"shortcut icon\"/>

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap\" rel=\"stylesheet\">
 
\t<!-- Stylesheets -->
    {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
    {% endblock %}

\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\"/>
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/>


\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->

</head>
<body>
\t<!-- Page Preloder -->
\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>

\t<!-- Header section -->
\t<header class=\"header-section clearfix\">
\t\t<a href=\"{{path('app_home')}}\" class=\"site-logo\">
\t\t\t<img src=\"{{asset('img/logo.png')}}\" alt=\"\">
\t\t</a>
\t\t<div class=\"header-right\">
\t\t\t<div class=\"user-panel\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<a href=\"{{path('app_logout')}}\" class=\"register\">Logout</a>
\t\t\t\t\t<a href=\"{{path('app_registration')}}\" class=\"register\">Register</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{path('app_login')}}\" class=\"register\">Login</a>\t\t\t\t\t
\t\t\t\t{% endif %}
\t\t\t</div> 
\t\t</div>
\t\t<ul class=\"main-menu\">
\t\t\t<li><a href=\"{{path('app_home')}}\">Home</a></li>
\t\t\t<li><a href=\"{{path('mail')}}\">Contact</a></li>
\t\t\t{% if(is_granted('IS_AUTHENTICATED_FULLY')) %}
\t\t\t<li><a href=\"{{path('dish.view')}}\">Dish</a>
\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t<li><a href=\"{{path('dish.create')}}\">Create</a></li>
\t\t\t\t</ul>
\t\t\t</li>\t\t\t
\t\t\t<li><a href=\"{{path('app_menu')}}\">Menu</a></li>\t\t\t\t
\t\t\t<li><a href=\"{{path('app_order')}}\">Orders</a></li>\t
\t\t\t{% endif %}
\t\t</ul>
\t</header>
\t<!-- Header section end -->

    {% block body %}{% endblock %}

\t<!-- Intro section -->
\t<section class=\"intro-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<h2>Delicious food</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
\t\t\t\t\t<a href=\"{{path('app_menu')}}\" class=\"site-btn\">Try it now</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Intro section end -->

\t<!-- Footer section -->
\t<footer class=\"footer-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-6 col-lg-7 order-lg-2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>About us</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('app_home')}}\">Welcome</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('app_order')}}\">Orders</a></li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Menu</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Music</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Subscription</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Custom Music</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Footage</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Playlists</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Newsletter</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Careers</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Press</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-6 col-lg-5 order-lg-1\">
\t\t\t\t\t<img src=\"img/logo.png\" alt=\"\">
\t\t\t\t\t<div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a> Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-pinterest\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"\"><i class=\"fa-brands fa-youtube\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- Footer section end -->

\t<script src=\"{{asset('js/mixitup.min.js')}}\"></script>
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
\t
\t</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\menukarte\\templates\\base.html.twig");
    }
}

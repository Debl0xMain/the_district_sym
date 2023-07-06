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
class __TwigTemplate_7504fabeb78700efb3d1e80624ce7f92 extends Template
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
            'login' => [$this, 'block_login'],
            'register' => [$this, 'block_register'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            <!-- MetaDonne -->

    <meta name=\"title\" content=\"The District\" />
\t<meta name=\"description\" content= \"Restaurant The District\" />
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"theme-color\" content=\"#3c790a\" media=\"(prefers-color-scheme: dark)\">
    <meta name=\"color-scheme\" content=\"dark light\">

    <!-- Logo -->

    <link rel=\"icon\" type=\"image/png\" href=\"./src/img/logo/favicon.png\" />

    <title>The District - Index</title>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/Css/unchanged.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/Css/categorie.css"), "html", null, true);
        echo "\">
        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <script
  src=\"https://code.jquery.com/jquery-3.7.0.js\"
  integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\"
  crossorigin=\"anonymous\"></script>
    </head>
    <body>


";
        // line 32
        echo "    <header class=\"container\">
    <nav class=\"navbar navbar-expand-sm justify-content-center fixed-top bg-nav\">
        <div class=\"\">
            <button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#n_bar\" aria-controls=\"navbarNavAltMarkup\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon my-5\"><img class=\"logomin\" src=\"/src/img/logo/logo1.png\" alt=\"logomin\"></span>
            </button>
            <div class=\"collapse navbar-collapse text-center text-align-center\" id=\"n_bar\">
                <ul class=\"navbar-nav\">
                    <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat");
        echo "\">Categorie</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link  reveal-top navtext\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat");
        echo "\">Plats</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
                </li>
                <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
                </ul>
            </div>
        </div>

        ";
        // line 59
        echo "<div class=\"position-fixed btnlogin\">
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\RegistrationController::register"));
        // line 62
        echo "
</div>

        ";
        // line 66
        echo "<div>
    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PanierController::panier"));
        // line 69
        echo "
</div>


        ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73)) {
            // line 74
            echo "
            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
            <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn-outline-light btnprofil\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "Nom", [], "any", false, false, false, 79), "html", null, true);
            echo "</p>
            </button></a>
            <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"profildeco btn btn-outline-danger\"><i class=\"fa-solid fa-arrow-right-from-bracket\" style=\"color: #ff0000;\"></i></a>
            </div>


        ";
        }
        // line 86
        echo "</header>

";
        // line 89
        echo "<div class='row my-2'>
<form action=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_platsearch");
        echo "\" method=\"POST\">
    <div class=\"input-group searchdiv\">
      <div class=\"row search mx-auto\">
        <label for=\"autocomplete\">Search on site </label>
      <div class=\"input-group-append\">
      <input id=\"autocomplete1\" name='resultsearch' onkeypress=\"verifierCaracteres(event); return false;\" required pattern=\"^[A-Za-z '-]+\$\" maxlength=\"15\">
      <button class=\"btn btn-outline-danger\" id='searchbtn' type=\"submit\">SEND</button>
      <p id=\"msgerreur\"></p>
      </div>
    </div>
  </form>
</div>

<div class=\"background\"><img class=\"background\" src=\"/src/img/background/background.jpg\" alt=\"\"></div>
";
        // line 105
        echo "        ";
        $this->displayBlock('login', $context, $blocks);
        // line 106
        echo "        ";
        $this->displayBlock('register', $context, $blocks);
        // line 107
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "
<footer>
<nav class=\"navbar navbar-expand-sm justify-content-center fixed-bottom bg-nav\">
    <div>
        <button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#b_bar\" aria-controls=\"navbarNavAltMarkup\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon mb-5\"><img class=\"logomin\" src=\"/src/img/logo/logo1.png\" alt=\"logomin\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"b_bar\">
            <ul class=\"navbar-nav text-center\">
                <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot colorlogofooter\" href=\"#\"><i class=\"fa-brands fa-facebook fa-xl\"></i></i></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot colorlogofooter\" href=\"#\"><i class=\"fa-brands fa-instagram fa-xl\"></i></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot\" href=\"#\"><img class=\"logo\" src=\"/src/img/footer/logo-tripadvisor.png\" title=\"Tripadvisor\" alt=\"logo-tripadvisor\"></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot\" href=\"#\"><img class=\"logo\" src=\"/src/img/footer/logo-ubereats.png\" title=\"Uber Eats\" alt=\"logo-ubereats\"></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link navtext reveal-bot\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mlegal");
        echo "\"><p>Mentions Legales</p></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link navtext reveal-bot\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
        echo "\"><p>Cgu</p></a>
            </li>
            <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
            </ul>
        </div>
    </div>
</nav>
</footer>
        <script src=\"https://kit.fontawesome.com/3fd2d451cc.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
         ";
        // line 145
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145) == null)) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/js/btnclick.js"), "html", null, true);
            echo "\"></script>  ";
        }
        // line 146
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/js/panier.js"), "html", null, true);
        echo "\"></script>
         ";
        // line 147
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  372 => 147,  354 => 107,  336 => 106,  318 => 105,  300 => 22,  281 => 5,  270 => 148,  268 => 147,  263 => 146,  257 => 145,  243 => 134,  237 => 131,  212 => 108,  209 => 107,  206 => 106,  203 => 105,  186 => 90,  183 => 89,  179 => 86,  171 => 81,  166 => 79,  159 => 75,  156 => 74,  154 => 73,  148 => 69,  146 => 67,  143 => 66,  138 => 62,  136 => 60,  133 => 59,  123 => 51,  117 => 48,  111 => 45,  105 => 42,  93 => 32,  83 => 23,  81 => 22,  77 => 21,  73 => 20,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
       <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            <!-- MetaDonne -->

    <meta name=\"title\" content=\"The District\" />
\t<meta name=\"description\" content= \"Restaurant The District\" />
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"theme-color\" content=\"#3c790a\" media=\"(prefers-color-scheme: dark)\">
    <meta name=\"color-scheme\" content=\"dark light\">

    <!-- Logo -->

    <link rel=\"icon\" type=\"image/png\" href=\"./src/img/logo/favicon.png\" />

    <title>The District - Index</title>
    <link rel=\"stylesheet\" href=\"{{asset('src/Css/unchanged.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('src/Css/categorie.css')}}\">
        {% block stylesheets %}{% endblock %}
        <script
  src=\"https://code.jquery.com/jquery-3.7.0.js\"
  integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\"
  crossorigin=\"anonymous\"></script>
    </head>
    <body>


{# Header #}
    <header class=\"container\">
    <nav class=\"navbar navbar-expand-sm justify-content-center fixed-top bg-nav\">
        <div class=\"\">
            <button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#n_bar\" aria-controls=\"navbarNavAltMarkup\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon my-5\"><img class=\"logomin\" src=\"/src/img/logo/logo1.png\" alt=\"logomin\"></span>
            </button>
            <div class=\"collapse navbar-collapse text-center text-align-center\" id=\"n_bar\">
                <ul class=\"navbar-nav\">
                    <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"{{ path(\"app_accueil\") }}\">Accueil</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"{{ path(\"app_cat\") }}\">Categorie</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link  reveal-top navtext\" href=\"{{ path(\"app_plat\") }}\">Plats</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"{{ path(\"app_contact\") }}\">Contact</a>
                </li>
                <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
                </ul>
            </div>
        </div>

        {# login/register #}
<div class=\"position-fixed btnlogin\">
    {{ render(controller(
        'App\\\\Controller\\\\RegistrationController::register'
    )) }}
</div>

        {# login/register #}
<div>
    {{ render(controller(
        'App\\\\Controller\\\\PanierController::panier'
    )) }}
</div>


        {% if app.user %}

            <a href=\"{{ path('app_profil', {id: app.user.id}) }}\">
            <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn-outline-light btnprofil\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\">{{ app.user.Nom }}</p>
            </button></a>
            <a href=\"{{ path('app_logout') }}\" class=\"profildeco btn btn-outline-danger\"><i class=\"fa-solid fa-arrow-right-from-bracket\" style=\"color: #ff0000;\"></i></a>
            </div>


        {% endif %}
</header>

{# SearchBar #}
<div class='row my-2'>
<form action=\"{{path(\"app_platsearch\")}}\" method=\"POST\">
    <div class=\"input-group searchdiv\">
      <div class=\"row search mx-auto\">
        <label for=\"autocomplete\">Search on site </label>
      <div class=\"input-group-append\">
      <input id=\"autocomplete1\" name='resultsearch' onkeypress=\"verifierCaracteres(event); return false;\" required pattern=\"^[A-Za-z '-]+\$\" maxlength=\"15\">
      <button class=\"btn btn-outline-danger\" id='searchbtn' type=\"submit\">SEND</button>
      <p id=\"msgerreur\"></p>
      </div>
    </div>
  </form>
</div>

<div class=\"background\"><img class=\"background\" src=\"/src/img/background/background.jpg\" alt=\"\"></div>
{# Body #}
        {% block login %}{% endblock %}
        {% block register %}{% endblock %}
        {% block body %}{% endblock %}

<footer>
<nav class=\"navbar navbar-expand-sm justify-content-center fixed-bottom bg-nav\">
    <div>
        <button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#b_bar\" aria-controls=\"navbarNavAltMarkup\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon mb-5\"><img class=\"logomin\" src=\"/src/img/logo/logo1.png\" alt=\"logomin\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"b_bar\">
            <ul class=\"navbar-nav text-center\">
                <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot colorlogofooter\" href=\"#\"><i class=\"fa-brands fa-facebook fa-xl\"></i></i></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot colorlogofooter\" href=\"#\"><i class=\"fa-brands fa-instagram fa-xl\"></i></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot\" href=\"#\"><img class=\"logo\" src=\"/src/img/footer/logo-tripadvisor.png\" title=\"Tripadvisor\" alt=\"logo-tripadvisor\"></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link reveal-bot\" href=\"#\"><img class=\"logo\" src=\"/src/img/footer/logo-ubereats.png\" title=\"Uber Eats\" alt=\"logo-ubereats\"></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link navtext reveal-bot\" href=\"{{ path(\"app_mlegal\") }}\"><p>Mentions Legales</p></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link navtext reveal-bot\" href=\"{{ path(\"app_cgu\") }}\"><p>Cgu</p></a>
            </li>
            <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
            </ul>
        </div>
    </div>
</nav>
</footer>
        <script src=\"https://kit.fontawesome.com/3fd2d451cc.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
         {% if app.user == null %}<script src=\"{{asset('src/js/btnclick.js')}}\"></script>  {% endif %}
         <script src=\"{{asset('src/js/panier.js')}}\"></script>
         {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/base.html.twig");
    }
}

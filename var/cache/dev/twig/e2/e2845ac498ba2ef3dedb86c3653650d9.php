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
class __TwigTemplate_889f9b7f938eac54a1a70c0f5a95a815 extends Template
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
    <link rel=\"stylesheet\" href=\"./src/Css/unchanged.css\">
    <link rel=\"stylesheet\" href=\"./src/Css/categorie.css\">
        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
";
        // line 26
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
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat");
        echo "\">Categorie</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link  reveal-top navtext\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat");
        echo "\">Plats</a>
                </li>
                <li class=\"nav-item mx-3 pt-3\">
                    <a class=\"nav-link reveal-top navtext\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
                </li>
                <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class=\"background\"><img class=\"background\" src=\"/src/img/background/background.jpg\" alt=\"\"></div>
";
        // line 55
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "<footer>
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
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mlegal");
        echo "\"><p>Mentions Legales</p></a>
            </li>
            <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
            </ul>
        </div>
    </div>
</nav>
</footer>
        <script src=\"https://kit.fontawesome.com/3fd2d451cc.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
        ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
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

    // line 55
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

    // line 91
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
        return array (  231 => 91,  213 => 55,  195 => 22,  176 => 5,  165 => 92,  163 => 91,  148 => 79,  124 => 57,  121 => 55,  109 => 45,  103 => 42,  97 => 39,  91 => 36,  79 => 26,  75 => 23,  73 => 22,  53 => 5,  47 => 1,);
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
    <link rel=\"stylesheet\" href=\"./src/Css/unchanged.css\">
    <link rel=\"stylesheet\" href=\"./src/Css/categorie.css\">
        {% block stylesheets %}{% endblock %}
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
    </nav>
</header>
<div class=\"background\"><img class=\"background\" src=\"/src/img/background/background.jpg\" alt=\"\"></div>
{# Body #}
        {% block body %}{% endblock %}
{# Footer #}
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
            <img class=\"navlogo\" src=\"/src/img/logo/logo.png\" alt=\"Logo The District\">
            </ul>
        </div>
    </div>
</nav>
</footer>
        <script src=\"https://kit.fontawesome.com/3fd2d451cc.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/base.html.twig");
    }
}

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
class __TwigTemplate_9656f0bfeac108758a11e02b0169f227 extends Template
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


        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">
            <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn-outline-light btnprofil\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "Nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
            </button></a>
            <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"profildeco btn btn-outline-danger\"><i class=\"fa-solid fa-arrow-right-from-bracket\" style=\"color: #ff0000;\"></i></a>
            </div>


        ";
        }
        // line 65
        echo "

          ";
        // line 68
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68) == null)) {
            // line 69
            echo "        <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn btn-outline-light btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#login\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\"> Login </p>
            </button>
        </div>
        ";
        }
        // line 76
        echo "
        ";
        // line 78
        echo "        <div class=\"position-fixed btnlogin btnshop\">
            <button type=\"button\" class=\"btn btn btn-outline-warning btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#basket-shopping\">
            <i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\">Panier</p>
            </button>
        </div>
    </nav>
</header>
";
        // line 87
        echo "
 ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88) == null)) {
            // line 89
            echo "
    ";
            // line 91
            echo "
  <div class=\"modal\" id=\"login\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
  <div class=\"modal-content loginmodal\">
    <div class=\"modal-header mx-auto\">
      <h5 class=\"modal-title\" id=\"exampleModalLabel\">Login<label class=\"switch\">
      <input type=\"checkbox\" id=\"changemodal\">
      <span class=\"slider round\"></span>
      </label> Inscription</h5>
    </div>
        <div class=\"modal-body container text-center\">

            <div class=\"text-center login\" id=\"loginchange\">

                                <form method=\"post\" action=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                                    ";
            // line 106
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 106, $this->source); })())) {
                // line 107
                echo "                                        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 107, $this->source); })()), "messageKey", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 107, $this->source); })()), "messageData", [], "any", false, false, false, 107), "security"), "html", null, true);
                echo "</div>
                                    ";
            }
            // line 109
            echo "
                                    <h1 class=\"h3 mb-3 font-weight-normal\">Login</h1>
                                    <label class='form-label' for=\"inputEmail\">Email</label>
                                    <input type=\"email\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                    <label class='form-label' for=\"inputPassword\">Password</label>
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                                    <input type=\"hidden\" name=\"_csrf_token\"
                                        value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"
                                    >

                                    
                                        ";
            // line 123
            echo "
                                        <div class=\"checkbox mb-3\">
                                            <label>
                                                <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                                            </label>
                                        </div>
                                    

                                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                        Login
                                    </button>
                                </form>
            </div>
        
              <div class=\" text-center inscription\" id=\"inscription\">
              <form method=\"post\" action=\"";
            // line 138
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
            echo "\">

    <div class=\"content row\">
            ";
            // line 141
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), 'form_start');
            echo "

            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 144, $this->source); })()), "email", [], "any", false, false, false, 144), 'row', ["label" => "Adresse email :"]);
            echo "
            </div>

            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 148
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), "nom", [], "any", false, false, false, 148), 'row', ["label" => "Nom :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 151, $this->source); })()), "prenom", [], "any", false, false, false, 151), 'row', ["label" => "Prenom :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 154, $this->source); })()), "ville", [], "any", false, false, false, 154), 'row', ["label" => "Ville:"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 157, $this->source); })()), "cp", [], "any", false, false, false, 157), 'row', ["label" => "Code postal :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 160
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 160, $this->source); })()), "adresse", [], "any", false, false, false, 160), 'row', ["label" => "Adresse :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 163
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 163, $this->source); })()), "telephone", [], "any", false, false, false, 163), 'row', ["label" => "Telephone :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 166
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 166, $this->source); })()), "plainPassword", [], "any", false, false, false, 166), "first", [], "any", false, false, false, 166), 'row', ["label" => "Mot de passe :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 169
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 169, $this->source); })()), "plainPassword", [], "any", false, false, false, 169), "second", [], "any", false, false, false, 169), 'row', ["label" => "Confirmez le mot de passe :"]);
            echo "

            </div>
        </div>
            <div class=\"col-9 mx-auto mb-2\">
                        <div class=\"form-group\">
                        ";
            // line 175
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 175, $this->source); })()), "agreeTerms", [], "any", false, false, false, 175), 'widget');
            echo "
                        <a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
            echo "\"> link</a>
                         </div>

                <button type=\"submit\" class=\"button btn btn-primary\">Inscription</button>
            </div>
            ";
            // line 181
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 181, $this->source); })()), 'form_end');
            echo "

                    </form>
              </div>
  

        </div>
    <div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Close</button>
    </div>
</div>
</div>
</div>'
";
        }
        // line 196
        echo "
<div class=\"modal fade\" id=\"basket-shopping\" tabindex=\"-1\" aria-labelledby=\"basket-shoppingLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content shopmodal\">
      <div class=\"modal-header mx-auto\">
        <h5 class=\"modal-title\" id=\"basket-shoppingLabel\"><i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>Panier</h5>
      </div>
      <div class=\"modal-body\">
        
                                        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <a href=\"../../../src/php/shoping/validcmd.php\"><button type=\"submit\" class=\"btn btn-outline-primary\">Paye</button></a>
      </div>
    </div>
  </div>
</div>

";
        // line 216
        echo "<div class='row my-2'>
<form action=\"";
        // line 217
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
        // line 232
        echo "        ";
        $this->displayBlock('login', $context, $blocks);
        // line 233
        echo "        ";
        $this->displayBlock('register', $context, $blocks);
        // line 234
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 235
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
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mlegal");
        echo "\"><p>Mentions Legales</p></a>
            </li>
            <li class=\"nav-item pt-3\">
                <a class=\"nav-link navtext reveal-bot\" href=\"";
        // line 261
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
<script
  src=\"https://code.jquery.com/jquery-3.7.0.js\"
  integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\"
  crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
         ";
        // line 277
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "user", [], "any", false, false, false, 277) == null)) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/js/btnclick.js"), "html", null, true);
            echo "\"></script>  ";
        }
        // line 278
        echo "         ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 279
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

    // line 232
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

    // line 233
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

    // line 234
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

    // line 278
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
        return array (  563 => 278,  545 => 234,  527 => 233,  509 => 232,  491 => 22,  472 => 5,  461 => 279,  458 => 278,  452 => 277,  433 => 261,  427 => 258,  402 => 235,  399 => 234,  396 => 233,  393 => 232,  376 => 217,  373 => 216,  352 => 196,  335 => 181,  327 => 176,  323 => 175,  314 => 169,  308 => 166,  302 => 163,  296 => 160,  290 => 157,  284 => 154,  278 => 151,  272 => 148,  265 => 144,  259 => 141,  253 => 138,  236 => 123,  229 => 117,  221 => 112,  216 => 109,  210 => 107,  208 => 106,  204 => 105,  188 => 91,  185 => 89,  183 => 88,  180 => 87,  170 => 78,  167 => 76,  158 => 69,  155 => 68,  151 => 65,  143 => 60,  138 => 58,  130 => 54,  128 => 53,  117 => 45,  111 => 42,  105 => 39,  99 => 36,  87 => 26,  83 => 23,  81 => 22,  77 => 21,  73 => 20,  55 => 5,  49 => 1,);
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


        {% if app.user %}
            <a href=\"{{ path('app_profil') }}\">
            <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn-outline-light btnprofil\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\">{{ app.user.Nom }}</p>
            </button></a>
            <a href=\"{{ path('app_logout') }}\" class=\"profildeco btn btn-outline-danger\"><i class=\"fa-solid fa-arrow-right-from-bracket\" style=\"color: #ff0000;\"></i></a>
            </div>


        {% endif %}


          {# buton login§/insription #}
        {% if app.user == null %}
        <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn btn-outline-light btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#login\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\"> Login </p>
            </button>
        </div>
        {% endif %}

        {# Buton panier #}
        <div class=\"position-fixed btnlogin btnshop\">
            <button type=\"button\" class=\"btn btn btn-outline-warning btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#basket-shopping\">
            <i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\">Panier</p>
            </button>
        </div>
    </nav>
</header>
{# Login/Inscription #}

 {% if app.user == null %}

    {# Login Modal #}

  <div class=\"modal\" id=\"login\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
  <div class=\"modal-content loginmodal\">
    <div class=\"modal-header mx-auto\">
      <h5 class=\"modal-title\" id=\"exampleModalLabel\">Login<label class=\"switch\">
      <input type=\"checkbox\" id=\"changemodal\">
      <span class=\"slider round\"></span>
      </label> Inscription</h5>
    </div>
        <div class=\"modal-body container text-center\">

            <div class=\"text-center login\" id=\"loginchange\">

                                <form method=\"post\" action=\"{{ path('app_login')}}\">
                                    {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                    {% endif %}

                                    <h1 class=\"h3 mb-3 font-weight-normal\">Login</h1>
                                    <label class='form-label' for=\"inputEmail\">Email</label>
                                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                    <label class='form-label' for=\"inputPassword\">Password</label>
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                                    <input type=\"hidden\" name=\"_csrf_token\"
                                        value=\"{{ csrf_token('authenticate') }}\"
                                    >

                                    
                                        {# Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                                        See https://symfony.com/doc/current/security/remember_me.html #}

                                        <div class=\"checkbox mb-3\">
                                            <label>
                                                <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                                            </label>
                                        </div>
                                    

                                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                        Login
                                    </button>
                                </form>
            </div>
        
              <div class=\" text-center inscription\" id=\"inscription\">
              <form method=\"post\" action=\"{{ path('app_accueil')}}\">

    <div class=\"content row\">
            {{ form_start(registrationForm) }}

            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.email, { label: 'Adresse email :' }) }}
            </div>

            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.nom, { label: 'Nom :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.prenom, { label: 'Prenom :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.ville, { label: 'Ville:' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.cp, { label: 'Code postal :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.adresse, { label: 'Adresse :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.telephone, { label: 'Telephone :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.plainPassword.first, { label: 'Mot de passe :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(registrationForm.plainPassword.second, { label: 'Confirmez le mot de passe :' }) }}

            </div>
        </div>
            <div class=\"col-9 mx-auto mb-2\">
                        <div class=\"form-group\">
                        {{ form_widget(registrationForm.agreeTerms) }}
                        <a href=\"{{ path(\"app_cgu\") }}\"> link</a>
                         </div>

                <button type=\"submit\" class=\"button btn btn-primary\">Inscription</button>
            </div>
            {{ form_end(registrationForm) }}

                    </form>
              </div>
  

        </div>
    <div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Close</button>
    </div>
</div>
</div>
</div>'
{% endif %}
{# Modal Panier #}

<div class=\"modal fade\" id=\"basket-shopping\" tabindex=\"-1\" aria-labelledby=\"basket-shoppingLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content shopmodal\">
      <div class=\"modal-header mx-auto\">
        <h5 class=\"modal-title\" id=\"basket-shoppingLabel\"><i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>Panier</h5>
      </div>
      <div class=\"modal-body\">
        
                                        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <a href=\"../../../src/php/shoping/validcmd.php\"><button type=\"submit\" class=\"btn btn-outline-primary\">Paye</button></a>
      </div>
    </div>
  </div>
</div>

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
<script
  src=\"https://code.jquery.com/jquery-3.7.0.js\"
  integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\"
  crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
         {% if app.user == null %}<script src=\"{{asset('src/js/btnclick.js')}}\"></script>  {% endif %}
         {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/base.html.twig");
    }
}

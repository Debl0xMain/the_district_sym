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

/* auth/_register.html.twig */
class __TwigTemplate_6ab1cc4315d239312e28abb6b02aa750 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/_register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/_register.html.twig"));

        // line 1
        echo " ";
        // line 2
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2) == null)) {
            // line 3
            echo "        <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn btn-outline-light btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#login\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\"> Login </p>
            </button>
        </div>
        ";
        }
        // line 11
        echo "
 ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12) == null)) {
            // line 13
            echo "
    ";
            // line 15
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
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                                    ";
            // line 30
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                                        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageKey", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })()), "messageData", [], "any", false, false, false, 31), "security"), "html", null, true);
                echo "</div>
                                    ";
            }
            // line 33
            echo "
                                    <h1 class=\"h3 mb-3 font-weight-normal\">Login</h1>
                                    <label class='form-label' for=\"inputEmail\">Email</label>
                                    <input type=\"email\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                    <label class='form-label' for=\"inputPassword\">Password</label>
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                                    <input type=\"hidden\" name=\"_csrf_token\"
                                        value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"
                                    >

                                    
                                        ";
            // line 47
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
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
            echo "\">

    <div class=\"content row\">
            ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), 'form_start');
            echo "

            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'row', ["label" => "Adresse email :"]);
            echo "
            </div>

            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), 'row', ["label" => "Nom :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "prenom", [], "any", false, false, false, 75), 'row', ["label" => "Prenom :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "ville", [], "any", false, false, false, 78), 'row', ["label" => "Ville:"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "cp", [], "any", false, false, false, 81), 'row', ["label" => "Code postal :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "adresse", [], "any", false, false, false, 84), 'row', ["label" => "Adresse :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "telephone", [], "any", false, false, false, 87), 'row', ["label" => "Telephone :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "plainPassword", [], "any", false, false, false, 90), "first", [], "any", false, false, false, 90), 'row', ["label" => "Mot de passe :"]);
            echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "plainPassword", [], "any", false, false, false, 93), "second", [], "any", false, false, false, 93), 'row', ["label" => "Confirmez le mot de passe :"]);
            echo "

            </div>
        </div>
            <div class=\"col-9 mx-auto mb-2\">
                        <div class=\"form-group\">
                        ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "agreeTerms", [], "any", false, false, false, 99), 'widget');
            echo "
                        <a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
            echo "\"> link</a>
                         </div>

                <button type=\"submit\" class=\"button btn btn-primary\">Inscription</button>
            </div>
            ";
            // line 105
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), 'form_end');
            echo "

                    </form>
              </div>
  

        </div>
    <div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Close</button>
    </div>
</div>
</div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "auth/_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 105,  204 => 100,  200 => 99,  191 => 93,  185 => 90,  179 => 87,  173 => 84,  167 => 81,  161 => 78,  155 => 75,  149 => 72,  142 => 68,  136 => 65,  130 => 62,  113 => 47,  106 => 41,  98 => 36,  93 => 33,  87 => 31,  85 => 30,  81 => 29,  65 => 15,  62 => 13,  60 => 12,  57 => 11,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {# buton login§/insription #}
        {% if app.user == null %}
        <div class=\"position-fixed btnlogin\">
            <button type=\"button\" class=\"btn btn btn-outline-light btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#login\">
            <i class=\"fa-solid fa-user\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\"> Login </p>
            </button>
        </div>
        {% endif %}
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
</div>
{% endif %}", "auth/_register.html.twig", "/home/deblox/Desktop/the_district_sym/templates/auth/_register.html.twig");
    }
}

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

/* profil/user.html.twig */
class __TwigTemplate_ea115228832b2540dc99a3b2489c8410 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo "src/Css/contact.css";
        echo "\">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["type"] => $context["message_list"]) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["message_list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "        <div class=\"notification is-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 9
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['message_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <div class=\"section\">
\t\t<div class=\"text-center my-5\">
<div class=\"row my-5\">

        <div class=\"content row\">
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "

            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'row', ["label" => "Adresse email :"]);
        echo "
            </div>

            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'row', ["label" => "Nom :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'row', ["label" => "Prenom :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "ville", [], "any", false, false, false, 33), 'row', ["label" => "Ville:"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "cp", [], "any", false, false, false, 36), 'row', ["label" => "Code postal :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), 'row', ["label" => "Adresse :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "telephone", [], "any", false, false, false, 42), 'row', ["label" => "Telephone :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), "first", [], "any", false, false, false, 45), 'row', ["label" => "Mot de passe :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'row', ["label" => "Confirmez le mot de passe :"]);
        echo "

            </div>
        </div>
            <div class=\"col-9 mx-auto mb-2\">
                <button type=\"submit\" class=\"button btn btn-primary\">Mettre à jour</button>
            </div>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "        
</div>
</div>

<div class='row my-5 colorlogofooter '>
<h2>Historique des commandes</h2>

<div class=\"row\">

    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cmddetail"]) || array_key_exists("cmddetail", $context) ? $context["cmddetail"] : (function () { throw new RuntimeError('Variable "cmddetail" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
            // line 65
            echo "    <div class=\"row colorlogofooter \">

        <div class=\"col test\"><p>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "libelle", [], "any", false, false, false, 67), "html", null, true);
            echo "</p></div>
        <div class=\"col test\"><p> prix/u ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "prix", [], "any", false, false, false, 68), "html", null, true);
            echo "</p></div>
        <div class=\"col test\">date ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "date_commande", [], "any", false, false, false, 69), "d-m-Y"), "html", null, true);
            echo "</div>
        <div class=\"col test\"> etat ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "etat", [], "any", false, false, false, 70), "html", null, true);
            echo "</div>
        <div class=\"col test\">quantite ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "quantite", [], "any", false, false, false, 71), "html", null, true);
            echo "</div>
        <div class=\"col test\">prix/t ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "total", [], "any", false, false, false, 72), "html", null, true);
            echo "</div>
        <div class=\"col test\">id commande ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "</div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
</div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 76,  260 => 73,  256 => 72,  252 => 71,  248 => 70,  244 => 69,  240 => 68,  236 => 67,  232 => 65,  228 => 64,  216 => 55,  206 => 48,  200 => 45,  194 => 42,  188 => 39,  182 => 36,  176 => 33,  170 => 30,  164 => 27,  157 => 23,  151 => 20,  144 => 15,  125 => 14,  122 => 13,  109 => 9,  104 => 8,  99 => 7,  95 => 6,  92 => 5,  82 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{('src/Css/contact.css')}}\">{% endblock %}
{% block body %}

{% for type, message_list in app.flashes %}
    {% for message in message_list %}
        <div class=\"notification is-{{ type }}\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

{% block content %}
    <div class=\"section\">
\t\t<div class=\"text-center my-5\">
<div class=\"row my-5\">

        <div class=\"content row\">
            {{ form_start(form) }}

            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.email, { label: 'Adresse email :' }) }}
            </div>

            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.nom, { label: 'Nom :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.prenom, { label: 'Prenom :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.ville, { label: 'Ville:' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.cp, { label: 'Code postal :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.adresse, { label: 'Adresse :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.telephone, { label: 'Telephone :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.plainPassword.first, { label: 'Mot de passe :' }) }}
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            {{ form_row(form.plainPassword.second, { label: 'Confirmez le mot de passe :' }) }}

            </div>
        </div>
            <div class=\"col-9 mx-auto mb-2\">
                <button type=\"submit\" class=\"button btn btn-primary\">Mettre à jour</button>
            </div>
            {{ form_end(form) }}        
</div>
</div>

<div class='row my-5 colorlogofooter '>
<h2>Historique des commandes</h2>

<div class=\"row\">

    {% for cmd in cmddetail %}
    <div class=\"row colorlogofooter \">

        <div class=\"col test\"><p>{{ cmd.libelle }}</p></div>
        <div class=\"col test\"><p> prix/u {{ cmd.prix }}</p></div>
        <div class=\"col test\">date {{ cmd.date_commande |date('d-m-Y') }}</div>
        <div class=\"col test\"> etat {{ cmd.etat }}</div>
        <div class=\"col test\">quantite {{ cmd.quantite }}</div>
        <div class=\"col test\">prix/t {{ cmd.total }}</div>
        <div class=\"col test\">id commande {{ cmd.id }}</div>
    </div>
    {% endfor %}

</div>

</div>
{% endblock %}
{% endblock %}
", "profil/user.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/profil/user.html.twig");
    }
}

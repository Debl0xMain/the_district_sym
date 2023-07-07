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

/* page/commande.html.twig */
class __TwigTemplate_eab8b77ba61ab4208495b8c97788a0d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/commande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/commande.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Commande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<form action='";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sendcommande");
        echo "' method='POST'>

            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "
        <div class=\"row my-5\">
        <hr class=\"hr text-center\">
            <fieldset>
                <legend class=\"cmdvalid text-center\">Information personnel</legend>
                 <div class=\"text-center\">
                    <label class=\"cmdvalid\" for=\"scales\">Nom</label><input name=\"nom\" class=\"form-control mx-auto form_style\" type=\"text\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "Nom", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                     <label class=\"cmdvalid mx-3\" for=\"scales\">Prenom</label><input name=\"prenom\" class=\"form-control mx-auto form_style\" type=\"text\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "Prenom", [], "any", false, false, false, 17), "html", null, true);
            echo "\"><br>
                     <div class=\"row\">
                    <label class=\"cmdvalid mx-3\" id=\"adresse\" for=\"scales\">Adresse</label>
                    <input class=\"form-control mx-auto form_style\" name=\"adresse\" type=\"text mx-3\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "adresse", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                     <label class=\"cmdvalid mx-3\" for=\"scales\">Ville</label>
                    <input class=\"form-control mx-auto form_style\" name=\"ville\" type=\"text mx-3\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "ville", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                                         <label class=\"cmdvalid mx-3\" for=\"scales\">Code postal</label>
                    <input class=\"form-control mx-auto form_style\" name=\"cp\" type=\"text mx-3\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "cp", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                                                             <label class=\"cmdvalid mx-3\" for=\"scales\">Email</label>
                    <input class=\"form-control mx-auto form_style\" name=\"email\" type=\"text mx-3\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                    </div>
                </div>
        </div>
        <div class=\"row my-5\"></div>
        <hr class=\"hr text-center\">
            <fieldset>
                <legend class=\"cmdvalid text-center\">Moyen de paiement</legend>
                 <div class=\"text-center\">
                    <input class=\"pay_check mx-3\" name=\"pay\" value=\"paypal\" type=\"radio\"><label class=\"cmdvalid\" for=\"scales\">Paypal</label> <br>
                    <input class=\"pay_check mx-3\" name=\"pay\" value=\"cb\" type=\"radio\"><label class=\"cmdvalid\" for=\"scales\">Carte Bancaire</label>
                </div>
            ";
        }
        // line 39
        echo "            <div class=\"row my-5 text-center\">
                <div class=\"panierbodycmd\">
                <p class=\"vald\"></p>
                </div>
                <hr class=\"hr text-center\">
                                        <div class='cmdvalid prixpaniertotal'>
                        <div>Prix total du panier</div>
                        <div class=\"cmdvalidprix paniertotalcmd\"></div>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["panier"]);
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 48
            echo "                <script>
                        var id = ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo ";
                        var qtevalue = ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "qte", [], "any", false, false, false, 50), "html", null, true);
            echo ";
                        var prix = ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "prix", [], "any", false, false, false, 51), "html", null, true);
            echo ";
                        var newprix = prix*qtevalue;

                            var img = '";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "img", [], "any", false, false, false, 54), "html", null, true);
            echo "';
                            var libelle = '";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "libelle", [], "any", false, false, false, 55), "html", null, true);
            echo "';
                                \$('.panierbodycmd').append(`<hr class=\"hr text-center\">`);
                                \$('.panierbodycmd').append(`<div class=\"cmdvalid row rows-col-4 panierrowcmd\${id}\" id='panierrowcmd\${id}'></div>`);

                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto imgpaniercolcmd\${id}\"></div>`);
                                \$('.imgpaniercolcmd'+id).append(`<img class=\"panierimg\" src=\"src/img/plat/\${img}\" alt=\"\${img}\" height=\"32px\" width=\"32px\">`);
                                
                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto col my-auto panierlibellecmd\${id}\"></div>`);
                                \$('.panierlibellecmd'+id).append(` \${libelle}`);

                                \$('.panierrowcmd'+id).append(`<div class=\" cmdvalid col my-auto col my-auto panierprixucmd\${id}\"></div>`);
                                \$('.panierprixucmd'+id).append(`prix/unité : \${prix}`);

                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto col my-auto panierprixtcmd\${id}\"></div>`);
                                \$('.panierprixtcmd'+id).append(`Prix/total : \${newprix} €`);

                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto col my-auto panierqtecmd\${id}\"></div>`);
                                \$('.panierqtecmd'+id).append(`Quantité : \${qtevalue} €`);

                                \$('.panierrowcmdcmd'+id).append(`<div class=\"col cmdvalid my-auto col my-auto panierpaniersupcmd\${id}\"></div>`);
                                \$('.panierpaniersupcmd'+id).append(`<button onclick=\"dlton(\${id})\" type=\"submit\" class=\"btn deletepanierbtn\" id='deletepanierbtn' data-id=\"\${id}\"><i class=\"fa-solid fa-trash\"></i></button>`);
                        
                                var recup_valeur_input_html = \$('#recupvaleur').val()
                                if(recup_valeur_input_html == undefined || recup_valeur_input_html == 0 || recup_valeur_input_html == null){
                                recup_valeur_input_html = 0;
                                }
                                var prix_total_panier = newprix + parseInt(recup_valeur_input_html);
                                \$('.paniertotalcmd').replaceWith(`<div class=\"cmdvalidprix paniertotalcmd\">\${prix_total_panier}</div>`);
                                \$('.paniertotalcmd').append(`<input type='text' hidden class='paniertotalinput' id=\"total_panier\" value=\"\${prix_total_panier}\" readonly>`);
                                </script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                <button type='submit' class=\"btn btn-danger btn-lg my-5\">Valide La Commande</button>
                </form>
            </div>
            <hr class=\"hr text-center\">
            <div class=\"my-5\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 86,  182 => 55,  178 => 54,  172 => 51,  168 => 50,  164 => 49,  161 => 48,  157 => 47,  147 => 39,  131 => 26,  126 => 24,  121 => 22,  116 => 20,  110 => 17,  106 => 16,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande{% endblock %}

{% block body %}

<form action='{{path(\"app_sendcommande\")}}' method='POST'>

            {% if app.user %}

        <div class=\"row my-5\">
        <hr class=\"hr text-center\">
            <fieldset>
                <legend class=\"cmdvalid text-center\">Information personnel</legend>
                 <div class=\"text-center\">
                    <label class=\"cmdvalid\" for=\"scales\">Nom</label><input name=\"nom\" class=\"form-control mx-auto form_style\" type=\"text\" value=\"{{app.user.Nom}}\">
                     <label class=\"cmdvalid mx-3\" for=\"scales\">Prenom</label><input name=\"prenom\" class=\"form-control mx-auto form_style\" type=\"text\" value=\"{{app.user.Prenom}}\"><br>
                     <div class=\"row\">
                    <label class=\"cmdvalid mx-3\" id=\"adresse\" for=\"scales\">Adresse</label>
                    <input class=\"form-control mx-auto form_style\" name=\"adresse\" type=\"text mx-3\" value=\"{{app.user.adresse}}\">
                     <label class=\"cmdvalid mx-3\" for=\"scales\">Ville</label>
                    <input class=\"form-control mx-auto form_style\" name=\"ville\" type=\"text mx-3\" value=\"{{app.user.ville}}\">
                                         <label class=\"cmdvalid mx-3\" for=\"scales\">Code postal</label>
                    <input class=\"form-control mx-auto form_style\" name=\"cp\" type=\"text mx-3\" value=\"{{app.user.cp}}\">
                                                             <label class=\"cmdvalid mx-3\" for=\"scales\">Email</label>
                    <input class=\"form-control mx-auto form_style\" name=\"email\" type=\"text mx-3\" value=\"{{app.user.email}}\">
                    </div>
                </div>
        </div>
        <div class=\"row my-5\"></div>
        <hr class=\"hr text-center\">
            <fieldset>
                <legend class=\"cmdvalid text-center\">Moyen de paiement</legend>
                 <div class=\"text-center\">
                    <input class=\"pay_check mx-3\" name=\"pay\" value=\"paypal\" type=\"radio\"><label class=\"cmdvalid\" for=\"scales\">Paypal</label> <br>
                    <input class=\"pay_check mx-3\" name=\"pay\" value=\"cb\" type=\"radio\"><label class=\"cmdvalid\" for=\"scales\">Carte Bancaire</label>
                </div>
            {% endif %}
            <div class=\"row my-5 text-center\">
                <div class=\"panierbodycmd\">
                <p class=\"vald\"></p>
                </div>
                <hr class=\"hr text-center\">
                                        <div class='cmdvalid prixpaniertotal'>
                        <div>Prix total du panier</div>
                        <div class=\"cmdvalidprix paniertotalcmd\"></div>
                {% for panier in panier %}
                <script>
                        var id = {{panier.id}};
                        var qtevalue = {{panier.qte}};
                        var prix = {{panier.prix}};
                        var newprix = prix*qtevalue;

                            var img = '{{panier.img}}';
                            var libelle = '{{panier.libelle}}';
                                \$('.panierbodycmd').append(`<hr class=\"hr text-center\">`);
                                \$('.panierbodycmd').append(`<div class=\"cmdvalid row rows-col-4 panierrowcmd\${id}\" id='panierrowcmd\${id}'></div>`);

                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto imgpaniercolcmd\${id}\"></div>`);
                                \$('.imgpaniercolcmd'+id).append(`<img class=\"panierimg\" src=\"src/img/plat/\${img}\" alt=\"\${img}\" height=\"32px\" width=\"32px\">`);
                                
                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto col my-auto panierlibellecmd\${id}\"></div>`);
                                \$('.panierlibellecmd'+id).append(` \${libelle}`);

                                \$('.panierrowcmd'+id).append(`<div class=\" cmdvalid col my-auto col my-auto panierprixucmd\${id}\"></div>`);
                                \$('.panierprixucmd'+id).append(`prix/unité : \${prix}`);

                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto col my-auto panierprixtcmd\${id}\"></div>`);
                                \$('.panierprixtcmd'+id).append(`Prix/total : \${newprix} €`);

                                \$('.panierrowcmd'+id).append(`<div class=\"cmdvalid col my-auto col my-auto panierqtecmd\${id}\"></div>`);
                                \$('.panierqtecmd'+id).append(`Quantité : \${qtevalue} €`);

                                \$('.panierrowcmdcmd'+id).append(`<div class=\"col cmdvalid my-auto col my-auto panierpaniersupcmd\${id}\"></div>`);
                                \$('.panierpaniersupcmd'+id).append(`<button onclick=\"dlton(\${id})\" type=\"submit\" class=\"btn deletepanierbtn\" id='deletepanierbtn' data-id=\"\${id}\"><i class=\"fa-solid fa-trash\"></i></button>`);
                        
                                var recup_valeur_input_html = \$('#recupvaleur').val()
                                if(recup_valeur_input_html == undefined || recup_valeur_input_html == 0 || recup_valeur_input_html == null){
                                recup_valeur_input_html = 0;
                                }
                                var prix_total_panier = newprix + parseInt(recup_valeur_input_html);
                                \$('.paniertotalcmd').replaceWith(`<div class=\"cmdvalidprix paniertotalcmd\">\${prix_total_panier}</div>`);
                                \$('.paniertotalcmd').append(`<input type='text' hidden class='paniertotalinput' id=\"total_panier\" value=\"\${prix_total_panier}\" readonly>`);
                                </script>
                {% endfor %}
                <button type='submit' class=\"btn btn-danger btn-lg my-5\">Valide La Commande</button>
                </form>
            </div>
            <hr class=\"hr text-center\">
            <div class=\"my-5\"></div>
{% endblock %}", "page/commande.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/commande.html.twig");
    }
}

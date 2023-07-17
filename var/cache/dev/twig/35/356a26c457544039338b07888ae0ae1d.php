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

/* page/commandesend.html.twig */
class __TwigTemplate_0c7fe78bc5648eb946214ac4fcdf6fab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/commandesend.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/commandesend.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mail - Validation de commande</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
</head>
<body>

<div class=\"row text-center\">
<legend class=\"text-center\">Information personnel</legend>
    <p>Merci pour votre commande,</p>
    <p>Mr | Mme ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Votre Commande sera livre à ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ( ";
        echo twig_escape_filter($this->env, (isset($context["cp"]) || array_key_exists("cp", $context) ? $context["cp"] : (function () { throw new RuntimeError('Variable "cp" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " )</p>
</div>
 
<div class=\"row text-center\">
<legend class=\"text-center\">Montant </legend>
    <p class=\"co\">Vous avez paye : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["prix_total"]) || array_key_exists("prix_total", $context) ? $context["prix_total"] : (function () { throw new RuntimeError('Variable "prix_total" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " € par ";
        echo twig_escape_filter($this->env, (isset($context["pay"]) || array_key_exists("pay", $context) ? $context["pay"] : (function () { throw new RuntimeError('Variable "pay" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</p>
</div>

<div class=\"row text-center\">
<legend class=\"text-center\">Detail Commande</legend>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["panier"]);
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 26
            echo "    <div class=\"row\">

        <div class=\"cmdvalid col\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "libelle", [], "any", false, false, false, 28), "html", null, true);
            echo "</div>

        <div class=\" cmdvalid col\">prix/unité : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo " €</div>

        <div class=\"cmdvalid col\">Quantité :";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "qte", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page/commandesend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  104 => 32,  99 => 30,  94 => 28,  90 => 26,  86 => 25,  76 => 20,  64 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mail - Validation de commande</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
</head>
<body>

<div class=\"row text-center\">
<legend class=\"text-center\">Information personnel</legend>
    <p>Merci pour votre commande,</p>
    <p>Mr | Mme {{nom}} {{prenom}}</p>
    <p>Votre Commande sera livre à {{adresse}} à {{ville}} ( {{cp}} )</p>
</div>
 
<div class=\"row text-center\">
<legend class=\"text-center\">Montant </legend>
    <p class=\"co\">Vous avez paye : {{prix_total}} € par {{pay}}</p>
</div>

<div class=\"row text-center\">
<legend class=\"text-center\">Detail Commande</legend>
    {% for panier in panier %}
    <div class=\"row\">

        <div class=\"cmdvalid col\">{{panier.libelle}}</div>

        <div class=\" cmdvalid col\">prix/unité : {{panier.prix}} €</div>

        <div class=\"cmdvalid col\">Quantité :{{panier.qte}}</div>

    </div>
    {% endfor %}
</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
</body>
</html>", "page/commandesend.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/commandesend.html.twig");
    }
}

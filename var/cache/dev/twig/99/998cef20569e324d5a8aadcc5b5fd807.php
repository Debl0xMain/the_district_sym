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

/* page/plat.html.twig */
class __TwigTemplate_bcc4e48a1d9ddce7597dd9fee5e464e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/plat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/plat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/plat.html.twig", 1);
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

        echo "Plat";
        
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
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 7
            echo "<a href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_platadd");
            echo "' class=\"btn btn-warning\">Add plat<a/>
";
        }
        // line 9
        echo "<div class=\"row my-2 mx-5 text-center row-cols-1\">
<div class=\"col platmv\"><p>Nos plat | ";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "</p></div>
</div>
<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["plat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["plat"], "active", [], "any", false, false, false, 14) == 1)) {
                // line 15
                echo "<!-- Button trigger modal -->
<div class='my-5'>
<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#modal";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
                <div class=\"boxcat\">
                        <img class=\"catbackground\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/plat/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 19), "html", null, true);
                echo "\"
                            alt=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 20), "html", null, true);
                echo "\"
                            title=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 21), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                        <p class=\"catname mx-auto\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 22), "html", null, true);
                echo "</p>
                        <p class=\"catprix mx-auto\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 23), "html", null, true);
                echo "</p>
                        <input type=\"hidden\" value=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" name=\"cat\">
                </div>

</button>
              <div class=\"btnaddshop\">
                    <button class=\"btn btn-outline-light btnaddsubmit addpanier\" title=\"Ajouté au panier\" data-id=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\" value=\"1\">
                    <i class=\"fa-solid fa-cart-plus\"></i></button>
              </div>
              ";
                // line 32
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CHEF") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                    // line 33
                    echo "              <a href='";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modif");
                    echo "' class=\"btn btn-warning test\" name=\"id_modif_plat\" id=\"id_modif_plat\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 33), "html", null, true);
                    echo "\">Modifie<a/>
              ";
                }
                // line 35
                echo "
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "Label\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content modalaffcss \">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\"><p class=\"libellemv \">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 43), "html", null, true);
                echo "</p></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
            <img class=\"catbackground\" src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/plat/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 47), "html", null, true);
                echo "\"
                            alt=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 48), "html", null, true);
                echo "\"
                            title=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 49), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                       
                        <input type=\"hidden\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\" name=\"cat\">
            <p class=\"descmodal\">Description : ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 52), "html", null, true);
                echo "</p>
             <p class=\"descmodal\">Prix : ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 53), "html", null, true);
                echo "</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Understood</button>
      </div>
    </div>
  </div>
</div>
 
";
            }
            // line 64
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/plat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 65,  223 => 64,  209 => 53,  205 => 52,  201 => 51,  196 => 49,  192 => 48,  187 => 47,  180 => 43,  171 => 39,  165 => 35,  157 => 33,  155 => 32,  149 => 29,  141 => 24,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  120 => 19,  115 => 17,  111 => 15,  109 => 14,  105 => 13,  99 => 10,  96 => 9,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plat{% endblock %}

{% block body %}
{% if is_granted ('ROLE_CHEF') or is_granted ('ROLE_ADMIN') %}
<a href='{{path('app_platadd')}}' class=\"btn btn-warning\">Add plat<a/>
{% endif %}
<div class=\"row my-2 mx-5 text-center row-cols-1\">
<div class=\"col platmv\"><p>Nos plat | {{ plat | length }}</p></div>
</div>
<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
{% for plat in plat %}
{% if plat.active == 1 %}
<!-- Button trigger modal -->
<div class='my-5'>
<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#modal{{ plat.id }}\">
                <div class=\"boxcat\">
                        <img class=\"catbackground\" src=\"{{asset('src/img/plat/')}}{{ plat.image }}\"
                            alt=\"{{ plat.libelle }}\"
                            title=\"{{ plat.libelle }}\" height=\"255px\" width=\"255px\">
                        <p class=\"catname mx-auto\">{{ plat.libelle }}</p>
                        <p class=\"catprix mx-auto\">{{ plat.prix }}</p>
                        <input type=\"hidden\" value=\"{{ plat.id }}\" name=\"cat\">
                </div>

</button>
              <div class=\"btnaddshop\">
                    <button class=\"btn btn-outline-light btnaddsubmit addpanier\" title=\"Ajouté au panier\" data-id=\"{{ plat.id }}\" value=\"1\">
                    <i class=\"fa-solid fa-cart-plus\"></i></button>
              </div>
              {% if is_granted ('ROLE_CHEF') or is_granted ('ROLE_ADMIN') %}
              <a href='{{path('app_modif')}}' class=\"btn btn-warning test\" name=\"id_modif_plat\" id=\"id_modif_plat\" value=\"{{plat.id}}\">Modifie<a/>
              {% endif %}

</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal{{ plat.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"modal{{ plat.id }}Label\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content modalaffcss \">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\"><p class=\"libellemv \">{{ plat.libelle }}</p></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
            <img class=\"catbackground\" src=\"{{asset('src/img/plat/')}}{{ plat.image }}\"
                            alt=\"{{ plat.libelle }}\"
                            title=\"{{ plat.libelle }}\" height=\"255px\" width=\"255px\">
                       
                        <input type=\"hidden\" value=\"{{ plat.id }}\" name=\"cat\">
            <p class=\"descmodal\">Description : {{ plat.libelle }}</p>
             <p class=\"descmodal\">Prix : {{ plat.prix }}</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Understood</button>
      </div>
    </div>
  </div>
</div>
 
{% endif %}
 {% endfor %}
 {% endblock %}
", "page/plat.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/plat.html.twig");
    }
}

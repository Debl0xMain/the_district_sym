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

/* page/categorie.html.twig */
class __TwigTemplate_7f0212eb46574b86e4c5dd440c7f955c extends Template
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
        // line 38
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/categorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/categorie.html.twig", 38);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "categorie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
<div class=\"row my-2 mx-5 text-center row-cols-1\">
<div class=\"col platmv\"><p>Nos categorie | ";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 45, $this->source); })())), "html", null, true);
        echo "</p></div>
</div>
<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categorie"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "active", [], "any", false, false, false, 49) == 1)) {
                // line 50
                echo "
<!-- Button trigger modal -->
<div>
<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 53), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\">
<div class=\"boxcat\">
                            <img class=\"catbackground\" src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/category/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 55), "html", null, true);
                echo "\"
                                alt=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 56), "html", null, true);
                echo "\"
                                title=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 57), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                            <p class=\"catname mx-auto\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 58), "html", null, true);
                echo "</p>
                            <input type=\"hidden\" value=\"";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 59), "html", null, true);
                echo "\" name=\"cat\">
                    </div>
</button>
 </div>
 </div>

<!-- Modal -->
<div class=\"modal fade\" id=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 66), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 66), "html", null, true);
                echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 66), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 66), "html", null, true);
                echo "Label\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content modalaffcss\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5 libellemv\"> <p class=\"libellemv \">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 70), "html", null, true);
                echo "</p></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body text-center\">
                        <img class=\"catbackground\" src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/category/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 74), "html", null, true);
                echo "\"
                            alt=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 75), "html", null, true);
                echo "\"
                            title=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 76), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                        <input type=\"hidden\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\" name=\"cat\">
            <p class=\"descmodal\">Description : ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 78), "html", null, true);
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
            // line 89
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 90,  191 => 89,  177 => 78,  173 => 77,  169 => 76,  165 => 75,  160 => 74,  153 => 70,  142 => 66,  132 => 59,  128 => 58,  124 => 57,  120 => 56,  115 => 55,  109 => 53,  104 => 50,  102 => 49,  98 => 48,  92 => 45,  88 => 43,  78 => 42,  59 => 40,  36 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Categorie{% endblock %}

{% block body %}

{# {% for categorie in categorie %}
{{ categorie | length }}
{{ categorie.libelle }}
{{ categorie.image }}
{{ categorie.active }}
{{ categorie.id }}
{% endfor %} #}

{# <div class=\"row my-2 mx-5 text-center row-cols-1\">
<div class=\"col categoriemv\"><p>Nos catégories | {{ categorie | length }}</p></div>
</div>
<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
{% for categorie in categorie %}
    {% if categorie.active == 1 %}
    <div class=\"col reveal-left boxsize\">
        <button type=\"submit\" class=\"animcategory btn\">
                <div class=\"boxcat\">
                        <img class=\"catbackground\" src=\"{{asset('src/img/category/')}}{{ categorie.image }}\"
                            alt=\"{{ categorie.libelle }}\"
                            title=\"{{ categorie.libelle }}\" height=\"255px\" width=\"255px\">
                        <p class=\"catname mx-auto\">{{ categorie.libelle }}</p>
                        <input type=\"hidden\" value=\"{{ categorie.id }}\" name=\"cat\">
                </div>
        </button>
    </div>
    {% endif %}
 {% endfor %}
 </div>
 {% endblock %} #}


 {% extends 'base.html.twig' %}

{% block title %}categorie{% endblock %}

{% block body %}

<div class=\"row my-2 mx-5 text-center row-cols-1\">
<div class=\"col platmv\"><p>Nos categorie | {{ categorie | length }}</p></div>
</div>
<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
{% for categorie in categorie %}
{% if categorie.active == 1 %}

<!-- Button trigger modal -->
<div>
<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#{{ categorie.libelle }}{{ categorie.id }}\">
<div class=\"boxcat\">
                            <img class=\"catbackground\" src=\"{{asset('src/img/category/')}}{{ categorie.image }}\"
                                alt=\"{{ categorie.libelle }}\"
                                title=\"{{ categorie.libelle }}\" height=\"255px\" width=\"255px\">
                            <p class=\"catname mx-auto\">{{ categorie.libelle }}</p>
                            <input type=\"hidden\" value=\"{{ categorie.id }}\" name=\"cat\">
                    </div>
</button>
 </div>
 </div>

<!-- Modal -->
<div class=\"modal fade\" id=\"{{ categorie.libelle }}{{ categorie.id }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"{{ categorie.libelle }}{{ categorie.id }}Label\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content modalaffcss\">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5 libellemv\"> <p class=\"libellemv \">{{ categorie.libelle }}</p></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body text-center\">
                        <img class=\"catbackground\" src=\"{{asset('src/img/category/')}}{{ categorie.image }}\"
                            alt=\"{{ categorie.libelle }}\"
                            title=\"{{ categorie.libelle }}\" height=\"255px\" width=\"255px\">
                        <input type=\"hidden\" value=\"{{ categorie.id }}\" name=\"cat\">
            <p class=\"descmodal\">Description : {{ categorie.libelle }}</p>
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
 {% endblock %}", "page/categorie.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/categorie.html.twig");
    }
}

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
class __TwigTemplate_33e9c13e6c1b1ecdde71b1ef2ef8c8b4 extends Template
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
        echo "</p>
</div>
</div>
              <div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categorie"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "active", [], "any", false, false, false, 50) == 1)) {
                // line 51
                echo "                <div>
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_platcat", ["libelle" => twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">
                    <button type=\"submit\" class=\"btn\" name=\"categorie\" value=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 53), "html", null, true);
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
                          </a>
                  </button>
                  </form>
                </div>
 
";
            }
            // line 66
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return array (  150 => 67,  144 => 66,  134 => 59,  130 => 58,  126 => 57,  122 => 56,  117 => 55,  112 => 53,  108 => 52,  105 => 51,  103 => 50,  99 => 49,  92 => 45,  88 => 43,  78 => 42,  59 => 40,  36 => 38,);
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
<div class=\"col platmv\"><p>Nos categorie | {{ categorie | length }}</p>
</div>
</div>
              <div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
{% for categorie in categorie %}
{% if categorie.active == 1 %}
                <div>
                <a href=\"{{ path(\"app_platcat\", {\"libelle\" :categorie.libelle }) }}\">
                    <button type=\"submit\" class=\"btn\" name=\"categorie\" value=\"{{ categorie.libelle }}\">
                          <div class=\"boxcat\">
                            <img class=\"catbackground\" src=\"{{asset('src/img/category/')}}{{ categorie.image }}\"
                                alt=\"{{ categorie.libelle }}\"
                                title=\"{{ categorie.libelle }}\" height=\"255px\" width=\"255px\">
                            <p class=\"catname mx-auto\">{{ categorie.libelle }}</p>
                            <input type=\"hidden\" value=\"{{ categorie.id }}\" name=\"cat\">
                          </a>
                  </button>
                  </form>
                </div>
 
{% endif %}
 {% endfor %}
 {% endblock %}", "page/categorie.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/categorie.html.twig");
    }
}

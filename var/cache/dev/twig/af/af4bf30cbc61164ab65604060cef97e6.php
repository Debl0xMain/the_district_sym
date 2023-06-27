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

/* page/accueil.html.twig */
class __TwigTemplate_4676c04c32a45bec405cabd54dbeac69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/accueil.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "<pre>
  ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "session", [], "any", false, false, false, 7), "get", [0 => "panier"], "method", false, false, false, 7));
        echo "
</pre>

<div class=\"row my-5 mx-5 text-center row-cols-lg-1\">
  <div class=\"col platmv\"><p>Nos meilleurs catégories </p></div>
</div>
<div class=\"row my-5 mx-5 text-center row-cols-lg-3\">
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AffCatBest"]) || array_key_exists("AffCatBest", $context) ? $context["AffCatBest"] : (function () { throw new RuntimeError('Variable "AffCatBest" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["categorie"], "active", [], "array", false, false, false, 15) == 1)) {
                // line 16
                echo "<div>
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_platcat", ["libelle" => twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">
                    <button type=\"submit\" class=\"btn\" name=\"categorie\" value=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 18), "html", null, true);
                echo "\">
                          <div class=\"boxcat\">
                            <img class=\"catbackground\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/src/img/category/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 20), "html", null, true);
                echo "\"
                                alt=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 21), "html", null, true);
                echo "\"
                                title=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 22), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                            <p class=\"catname mx-auto\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 23), "html", null, true);
                echo "</p>
                            <input type=\"hidden\" value=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" name=\"cat\">
                          </a>
                  </button>
                  </form>
                </div>
";
            }
            // line 30
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " </div>

<div class=\"row my-5 mx-5 text-center row-cols-lg-1\"></div>

<div class=\"row my-5 mx-5 text-center row-cols-lg-1\">
  <div class=\"col platmv\"><p>Nos meilleurs plats </p></div>
</div>
<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["plat"], "active", [], "array", false, false, false, 40) == 1)) {
                // line 41
                echo "<!-- Button trigger modal -->
<div class='my-5'>
<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#modal";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "array", false, false, false, 43), "html", null, true);
                echo "\">
                <div class=\"boxcat\">
                        <img class=\"catbackground\" src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/plat/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "array", false, false, false, 45), "html", null, true);
                echo "\"
                            alt=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "array", false, false, false, 46), "html", null, true);
                echo "\"
                            title=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "array", false, false, false, 47), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                        <p class=\"catname mx-auto\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "array", false, false, false, 48), "html", null, true);
                echo "</p>
                        <p class=\"catprix mx-auto\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "array", false, false, false, 49), "html", null, true);
                echo "</p>
                        <input type=\"hidden\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "array", false, false, false, 50), "html", null, true);
                echo "\" name=\"cat\">
                </div>
</button>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "array", false, false, false, 56), "html", null, true);
                echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "array", false, false, false, 56), "html", null, true);
                echo "Label\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content modalaffcss \">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\"><p class=\"libellemv \">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "array", false, false, false, 60), "html", null, true);
                echo "</p></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
            <img class=\"catbackground\" src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/plat/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "array", false, false, false, 64), "html", null, true);
                echo "\"
                            alt=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "array", false, false, false, 65), "html", null, true);
                echo "\"
                            title=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "array", false, false, false, 66), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                       
                        <input type=\"hidden\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "array", false, false, false, 68), "html", null, true);
                echo "\" name=\"cat\">
            <p class=\"descmodal\">Description : ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "array", false, false, false, 69), "html", null, true);
                echo "</p>
             <p class=\"descmodal\">Prix : ";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "array", false, false, false, 70), "html", null, true);
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
            // line 81
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 82,  258 => 81,  244 => 70,  240 => 69,  236 => 68,  231 => 66,  227 => 65,  222 => 64,  215 => 60,  206 => 56,  197 => 50,  193 => 49,  189 => 48,  185 => 47,  181 => 46,  176 => 45,  171 => 43,  167 => 41,  165 => 40,  161 => 39,  151 => 31,  145 => 30,  136 => 24,  132 => 23,  128 => 22,  124 => 21,  119 => 20,  114 => 18,  110 => 17,  107 => 16,  105 => 15,  101 => 14,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<pre>
  {{ dump(app.session.get('panier')) }}
</pre>

<div class=\"row my-5 mx-5 text-center row-cols-lg-1\">
  <div class=\"col platmv\"><p>Nos meilleurs catégories </p></div>
</div>
<div class=\"row my-5 mx-5 text-center row-cols-lg-3\">
{% for categorie in AffCatBest %}
{% if categorie['active'] == 1 %}
<div>
                <a href=\"{{ path(\"app_platcat\", {\"libelle\" :categorie.libelle }) }}\">
                    <button type=\"submit\" class=\"btn\" name=\"categorie\" value=\"{{ categorie.libelle }}\">
                          <div class=\"boxcat\">
                            <img class=\"catbackground\" src=\"{{asset('/src/img/category/')}}{{ categorie.image }}\"
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
 </div>

<div class=\"row my-5 mx-5 text-center row-cols-lg-1\"></div>

<div class=\"row my-5 mx-5 text-center row-cols-lg-1\">
  <div class=\"col platmv\"><p>Nos meilleurs plats </p></div>
</div>
<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">
{% for plat in detail %}
{% if plat['active'] == 1 %}
<!-- Button trigger modal -->
<div class='my-5'>
<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#modal{{ plat[\"id\"] }}\">
                <div class=\"boxcat\">
                        <img class=\"catbackground\" src=\"{{asset('src/img/plat/')}}{{ plat[\"image\"] }}\"
                            alt=\"{{ plat[\"libelle\"]  }}\"
                            title=\"{{ plat[\"libelle\"]  }}\" height=\"255px\" width=\"255px\">
                        <p class=\"catname mx-auto\">{{ plat[\"libelle\"] }}</p>
                        <p class=\"catprix mx-auto\">{{ plat['prix'] }}</p>
                        <input type=\"hidden\" value=\"{{ plat[\"id\"] }}\" name=\"cat\">
                </div>
</button>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal{{ plat[\"id\"] }}\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"modal{{ plat[\"id\"] }}Label\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content modalaffcss \">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\"><p class=\"libellemv \">{{ plat[\"libelle\"] }}</p></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
            <img class=\"catbackground\" src=\"{{asset('src/img/plat/')}}{{ plat[\"image\"] }}\"
                            alt=\"{{ plat[\"libelle\"] }}\"
                            title=\"{{ plat[\"libelle\"] }}\" height=\"255px\" width=\"255px\">
                       
                        <input type=\"hidden\" value=\"{{ plat[\"id\"] }}\" name=\"cat\">
            <p class=\"descmodal\">Description : {{ plat[\"libelle\"] }}</p>
             <p class=\"descmodal\">Prix : {{ plat[\"prix\"] }}</p>
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
", "page/accueil.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/accueil.html.twig");
    }
}

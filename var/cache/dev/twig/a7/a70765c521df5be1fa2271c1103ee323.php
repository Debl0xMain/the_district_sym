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

/* page/_panier.html.twig */
class __TwigTemplate_ba0f5e72e2f1c0d3d1b2376be95cbc57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/_panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/_panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/_panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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
<pre>
  ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "session", [], "any", false, false, false, 7), "get", [0 => "panier"], "method", false, false, false, 7));
        echo "
</pre>

";
        // line 11
        echo "
        <div class=\"position-fixed btnlogin btnshop\">
            <button type=\"button\" class=\"btn btn btn-outline-warning btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#basket-shopping\">
            <i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\">Panier</p>
            </button>
        </div>


";
        // line 21
        echo "
<div class=\"modal fade\" id=\"basket-shopping\" tabindex=\"-1\" aria-labelledby=\"basket-shoppingLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content shopmodal\">
      <div class=\"modal-header mx-auto\">
        <h5 class=\"modal-title\" id=\"basket-shoppingLabel\"><i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>Panier</h5>
      </div>
      <div class=\"modal-body\">
        

<pre>
  ";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "session", [], "any", false, false, false, 32), "get", [0 => "panier"], "method", false, false, false, 32));
        echo "
</pre>
             
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <a href=\"../../../src/php/shoping/validcmd.php\"><button type=\"submit\" class=\"btn btn-outline-primary\">Paye</button></a>
      </div>
    </div>
  </div>
</div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/_panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  109 => 21,  98 => 11,  92 => 7,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Plat{% endblock %}

{% block body %}

<pre>
  {{ dump(app.session.get('panier')) }}
</pre>

{# Btn Panier #}

        <div class=\"position-fixed btnlogin btnshop\">
            <button type=\"button\" class=\"btn btn btn-outline-warning btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#basket-shopping\">
            <i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\">Panier</p>
            </button>
        </div>


{# Modal Panier #}

<div class=\"modal fade\" id=\"basket-shopping\" tabindex=\"-1\" aria-labelledby=\"basket-shoppingLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content shopmodal\">
      <div class=\"modal-header mx-auto\">
        <h5 class=\"modal-title\" id=\"basket-shoppingLabel\"><i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>Panier</h5>
      </div>
      <div class=\"modal-body\">
        

<pre>
  {{ dump(app.session.get('panier')) }}
</pre>
             
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <a href=\"../../../src/php/shoping/validcmd.php\"><button type=\"submit\" class=\"btn btn-outline-primary\">Paye</button></a>
      </div>
    </div>
  </div>
</div>
 {% endblock %}", "page/_panier.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/_panier.html.twig");
    }
}

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
class __TwigTemplate_8a2790f1fc0ae4f5d026dd671e276b76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/_panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/_panier.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 5
        echo "
        <div class=\"position-fixed btnlogin btnshop\">
            <button type=\"button\" class=\"btn btn btn-outline-warning btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#basket-shopping\">
            <i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\">Panier</p>
            </button>
        </div>


";
        // line 15
        echo "
<div class=\"modal fade\" id=\"basket-shopping\" tabindex=\"-1\" aria-labelledby=\"basket-shoppingLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content shopmodal\">
      <div class=\"modal-header mx-auto\">
        <h5 class=\"modal-title\" id=\"basket-shoppingLabel\"><i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>Panier</h5>
      </div>
      <div class=\"modal-body\">
        <div class=\"panierbody\">
        </div>

<pre>
  ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "get", [0 => "panier"], "method", false, false, false, 27));
        echo "
</pre>
";
        // line 30
        echo "      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <a href=\"\"><button type=\"submit\" class=\"btn btn-outline-primary\">Paye</button></a>
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

    public function getDebugInfo()
    {
        return array (  99 => 30,  94 => 27,  80 => 15,  69 => 5,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}

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
        <div class=\"panierbody\">
        </div>

<pre>
  {{ dump(app.session.get('panier')) }}
</pre>
{# <button class=\"btn deletepanierbtn\" id=\"deletepanierbtn\" data-id=\"\${id}\"><i class=\"fa-solid fa-trash\"></i></button> #}
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <a href=\"\"><button type=\"submit\" class=\"btn btn-outline-primary\">Paye</button></a>
      </div>
    </div>
  </div>
</div>

 {% endblock %}
", "page/_panier.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/_panier.html.twig");
    }
}

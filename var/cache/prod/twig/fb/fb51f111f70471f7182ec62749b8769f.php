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

/* page/platsearch.html.twig */
class __TwigTemplate_12374a252ce098f21b73168bb6a440de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/platsearch.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row my-1 mx-5 text-center row-cols-lg-3\">

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultsearch"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 7
            if ((twig_get_attribute($this->env, $this->source, $context["plat"], "active", [], "any", false, false, false, 7) == 1)) {
                // line 9
                echo "
<!-- Button trigger modal -->
<div class='my-5'>

<button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#modal";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                <div class=\"boxcat\">
                        <img class=\"catbackground\" src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/plat/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 15), "html", null, true);
                echo "\"
                            alt=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 16), "html", null, true);
                echo "\"
                            title=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 17), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                        <p class=\"catname mx-auto\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                        <p class=\"catprix mx-auto\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
                        <input type=\"hidden\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\" name=\"cat\">
                </div>
</button>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "Label\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content modalaffcss \">
      <div class=\"modal-header\">
        <h1 class=\"modal-title fs-5\"><p class=\"libellemv \">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 30), "html", null, true);
                echo "</p></h1>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
            <img class=\"catbackground\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/plat/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 34), "html", null, true);
                echo "\"
                            alt=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 35), "html", null, true);
                echo "\"
                            title=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 36), "html", null, true);
                echo "\" height=\"255px\" width=\"255px\">
                       
                        <input type=\"hidden\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" name=\"cat\">
            <p class=\"descmodal\">Description : ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 39), "html", null, true);
                echo "</p>
             <p class=\"descmodal\">Prix : ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 40), "html", null, true);
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
            // line 51
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo " ";
    }

    public function getTemplateName()
    {
        return "page/platsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 52,  152 => 51,  139 => 40,  135 => 39,  131 => 38,  126 => 36,  122 => 35,  117 => 34,  110 => 30,  101 => 26,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  71 => 15,  66 => 13,  60 => 9,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page/platsearch.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/platsearch.html.twig");
    }
}

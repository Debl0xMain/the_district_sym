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
class __TwigTemplate_5dc90260e83914e3e1d66f9b4c38a9aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/categorie.html.twig", 38);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "categorie";
    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
<div class=\"row my-2 mx-5 text-center row-cols-1\">
<div class=\"col platmv\"><p>Nos categorie | ";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["categorie"] ?? null)), "html", null, true);
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
        return array (  120 => 67,  114 => 66,  104 => 59,  100 => 58,  96 => 57,  92 => 56,  87 => 55,  82 => 53,  78 => 52,  75 => 51,  73 => 50,  69 => 49,  62 => 45,  58 => 43,  54 => 42,  47 => 40,  36 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("", "page/categorie.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/categorie.html.twig");
    }
}

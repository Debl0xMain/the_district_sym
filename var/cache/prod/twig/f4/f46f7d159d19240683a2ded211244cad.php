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

/* page/mlegal.html.twig */
class __TwigTemplate_c315e56ca09b8082c9da21bfb683788f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/mlegal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mentions Legales";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo "src/Css/contact.css";
        echo "\">";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"row mx-auto\">

<p class='mlegal'>Le site Internet thedistrict.fr est la propriété exclusive de Sellier Antoine.</p>


<p class='mlegal'>Identifiant siret : 123456789012345</p>


<p class='mlegal'>Propriétaire : Sellier Antoine</p>


<p class='mlegal'>E-mail : contact@thedistrict.fr</p>


<p class='mlegal'>Téléphone : 00 00 00 00 00</p>


<p class='mlegal'>Conception du site internet : Sellier Antoine</p>


<p class='mlegal'>Le site est hébergé par la société localhost, 1 rue de l'afpa, 80100 Amiens, Capital de ~1 euros, Siret : 0123456799874663210</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "page/mlegal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  65 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page/mlegal.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/mlegal.html.twig");
    }
}

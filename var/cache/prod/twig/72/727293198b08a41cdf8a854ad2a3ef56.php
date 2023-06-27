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

/* emails/signup.html.twig */
class __TwigTemplate_57cb3e23ab4ad9d6923af61a55be4297 extends Template
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
        // line 2
        echo "
<h1>Welcome</h1>

<p>
    You signed up as ";
        // line 6
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo " the following email:
</p>

";
    }

    public function getTemplateName()
    {
        return "emails/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/signup.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/emails/signup.html.twig");
    }
}

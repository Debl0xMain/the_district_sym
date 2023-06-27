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

/* emails/contact_email.html.twig */
class __TwigTemplate_af13b04685a2031d8af0b6aed478acb6 extends Template
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
        echo "<h1>Welcome ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "toName", [], "any", false, false, false, 2), "html", null, true);
        echo "!</h1>

<p>
    You signed up as ";
        // line 5
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo " the following email:
</p>
<p><code>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "to", [], "any", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "address", [], "any", false, false, false, 7), "html", null, true);
        echo "</code></p>

<p>
    <a href=\"#\">Click here to activate your account</a>
    (this link is valid until ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["expiration_date"] ?? null), "F jS"), "html", null, true);
        echo ")
</p>";
    }

    public function getTemplateName()
    {
        return "emails/contact_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  49 => 7,  44 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/contact_email.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/emails/contact_email.html.twig");
    }
}

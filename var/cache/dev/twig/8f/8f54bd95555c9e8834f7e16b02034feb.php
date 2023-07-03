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
class __TwigTemplate_076a1d802de8d984b30c5270b6197e56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact_email.html.twig"));

        // line 2
        echo "<h1>Welcome ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 2, $this->source); })()), "toName", [], "any", false, false, false, 2), "html", null, true);
        echo "!</h1>

<p>
    You signed up as ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " the following email:
</p>
<p><code>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 7, $this->source); })()), "to", [], "any", false, false, false, 7), 0, [], "array", false, false, false, 7), "address", [], "any", false, false, false, 7), "html", null, true);
        echo "</code></p>

<p>
    <a href=\"#\">Click here to activate your account</a>
    (this link is valid until ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["expiration_date"]) || array_key_exists("expiration_date", $context) ? $context["expiration_date"] : (function () { throw new RuntimeError('Variable "expiration_date" does not exist.', 11, $this->source); })()), "F jS"), "html", null, true);
        echo ")
</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  62 => 11,  55 => 7,  50 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/emails/signup.html.twig #}
<h1>Welcome {{ email.toName }}!</h1>

<p>
    You signed up as {{ username }} the following email:
</p>
<p><code>{{ email.to[0].address }}</code></p>

<p>
    <a href=\"#\">Click here to activate your account</a>
    (this link is valid until {{ expiration_date|date('F jS') }})
</p>", "emails/contact_email.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/emails/contact_email.html.twig");
    }
}

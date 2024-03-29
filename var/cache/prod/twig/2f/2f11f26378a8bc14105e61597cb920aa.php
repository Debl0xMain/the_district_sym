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

/* profil/user.html.twig */
class __TwigTemplate_04925a15e493cdb1ef7569d17d9548fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "profil/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo "src/Css/contact.css";
        echo "\">";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["type"] => $context["message_list"]) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["message_list"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "        <div class=\"notification is-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 9
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['message_list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"section\">
\t\t<div class=\"text-center my-5\">
<div class=\"row my-5\">

        <div class=\"content row\">
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 23), 'row', ["label" => "Adresse email :"]);
        echo "
            </div>

            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 27), 'row', ["label" => "Nom :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 30), 'row', ["label" => "Prenom :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 33), 'row', ["label" => "Ville:"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cp", [], "any", false, false, false, 36), 'row', ["label" => "Code postal :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 39), 'row', ["label" => "Adresse :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 42), 'row', ["label" => "Telephone :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 45), "first", [], "any", false, false, false, 45), 'row', ["label" => "Mot de passe :"]);
        echo "
            </div>
            <div class=\"col-9 mx-auto mb-2\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'row', ["label" => "Confirmez le mot de passe :"]);
        echo "

            </div>
        </div>
            <div class=\"col-9 mx-auto mb-2\">
                <button type=\"submit\" class=\"button btn btn-primary\">Mettre à jour</button>
            </div>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "        
</div>
</div>

<div class='row my-5'>
<h2>Historique des commandes</h2>

<div class=\"row\">

    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cmddetail"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
            // line 65
            echo "    <div class=\"row\">

        <div class=\"col test\"><p>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "libelle", [], "any", false, false, false, 67), "html", null, true);
            echo "</p></div>
        <div class=\"col test\"><p> prix/u ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "prix", [], "any", false, false, false, 68), "html", null, true);
            echo "</p></div>
        <div class=\"col test\">date ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "date_commande", [], "any", false, false, false, 69), "d-m-Y"), "html", null, true);
            echo "</div>
        <div class=\"col test\"> etat ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "etat", [], "any", false, false, false, 70), "html", null, true);
            echo "</div>
        <div class=\"col test\">quantite ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "quantite", [], "any", false, false, false, 71), "html", null, true);
            echo "</div>
        <div class=\"col test\">prix/t ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "total", [], "any", false, false, false, 72), "html", null, true);
            echo "</div>
        <div class=\"col test\">id commande ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "</div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "profil/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 76,  218 => 73,  214 => 72,  210 => 71,  206 => 70,  202 => 69,  198 => 68,  194 => 67,  190 => 65,  186 => 64,  174 => 55,  164 => 48,  158 => 45,  152 => 42,  146 => 39,  140 => 36,  134 => 33,  128 => 30,  122 => 27,  115 => 23,  109 => 20,  102 => 15,  95 => 14,  92 => 13,  79 => 9,  74 => 8,  69 => 7,  65 => 6,  62 => 5,  58 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profil/user.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/profil/user.html.twig");
    }
}

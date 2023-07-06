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

        // line 2
        echo "
";
        // line 4
        echo "
        <div class=\"position-fixed btnlogin btnshop\">
            <button type=\"button\" class=\"btn btn btn-outline-warning btnicon\" id=\"logincharge\" data-bs-toggle=\"modal\" data-bs-target=\"#basket-shopping\">
            <i class=\"fa-sharp fa-solid fa-basket-shopping\"></i>
            <p class=\"btnlogintext\" id=\"btnlogintext\">Panier</p>
            </button>
        </div>


";
        // line 14
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
        <div class='prixpaniertotal'>
      <div>Prix total du panier</div>
      <div class=\"paniertotal\"></div>
</div>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["panier"]);
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 29
            echo "
<script>

var id = ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo ";
var qtevalue = ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "qte", [], "any", false, false, false, 33), "html", null, true);
            echo ";
var prix = ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "prix", [], "any", false, false, false, 34), "html", null, true);
            echo ";
var newprix = prix*qtevalue;



var recup_valeur_input_html = \$('#recupvaleur').val()
if(recup_valeur_input_html == undefined || recup_valeur_input_html == 0 || recup_valeur_input_html == null){
  recup_valeur_input_html = 0;
}
var prix_total_panier = newprix + parseInt(recup_valeur_input_html);
\$('.paniertotal').replaceWith(`<div class=\"paniertotal\">\${prix_total_panier}</div>`);
\$('.paniertotal').append(`<input type='text' hidden class='paniertotalinput' id='recupvaleur' value=\"\${prix_total_panier}\" readonly>`);
                                                   
                                                   

    var img = '";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "img", [], "any", false, false, false, 49), "html", null, true);
            echo "';
    var libelle = '";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "libelle", [], "any", false, false, false, 50), "html", null, true);
            echo "';
        
        \$('.panierbody').append(`<div class=\"row rows-col-4 panierrow\${id}\" id='panierrow\${id}'></div>`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto imgpaniercol\${id}\"></div>`);
        \$('.imgpaniercol'+id).append(`<img class=\"panierimg\" src=\"src/img/plat/\${img}\" alt=\"\${img}\" height=\"32px\" width=\"32px\">`);
        
        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierlibelle\${id}\"></div>`);
        \$('.panierlibelle'+id).append(`\${libelle}`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierprixu\${id}\"></div>`);
        \$('.panierprixu'+id).append(`prix/u\${prix}`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierprixt\${id}\"></div>`);
        \$('.panierprixt'+id).append(`Prix/t\${newprix}`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierqte\${id}\"></div>`);
        \$('.panierqte'+id).append(`<select name=\"\${id}\" class=\"changeqte\" id=\"qteselect\${id}\"><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option></select>`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierpaniersup\${id}\"></div>`);
        \$('.panierpaniersup'+id).append(`<button onclick=\"dlton(\${id})\" type=\"submit\" class=\"btn deletepanierbtn\" id='deletepanierbtn' data-id=\"\${id}\"><i class=\"fa-solid fa-trash\"></i></button>`);

              if(qtevalue == 2){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
                }
               if(qtevalue == 3){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               }
               if(qtevalue == 4){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);   
               } 
               if(qtevalue == 5){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               }
               if(qtevalue == 6){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               } 
               if(qtevalue == '7'){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               } 
               if(qtevalue == '8'){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               } 
               if(qtevalue == '9'){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               }
      
          
</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "      <button class=\"btn deletepanierbtnall\" id=\"deletepanierbtn\" data-id=\"\${id}\" onclick='dltonalll()'><i class=\"fa-solid fa-trash\"></i></button>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-outline-primary\">Valide Panier</button></a>
      </div>
    </div>
  </div>
</div>
<script
  src=\"https://code.jquery.com/jquery-3.7.0.js\"
  integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\"
  crossorigin=\"anonymous\"></script>

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
        return array (  196 => 108,  132 => 50,  128 => 49,  110 => 34,  106 => 33,  102 => 32,  97 => 29,  93 => 28,  77 => 14,  66 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

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
        <div class='prixpaniertotal'>
      <div>Prix total du panier</div>
      <div class=\"paniertotal\"></div>
</div>
        {% for panier in panier %}

<script>

var id = {{panier.id}};
var qtevalue = {{panier.qte}};
var prix = {{panier.prix}};
var newprix = prix*qtevalue;



var recup_valeur_input_html = \$('#recupvaleur').val()
if(recup_valeur_input_html == undefined || recup_valeur_input_html == 0 || recup_valeur_input_html == null){
  recup_valeur_input_html = 0;
}
var prix_total_panier = newprix + parseInt(recup_valeur_input_html);
\$('.paniertotal').replaceWith(`<div class=\"paniertotal\">\${prix_total_panier}</div>`);
\$('.paniertotal').append(`<input type='text' hidden class='paniertotalinput' id='recupvaleur' value=\"\${prix_total_panier}\" readonly>`);
                                                   
                                                   

    var img = '{{panier.img}}';
    var libelle = '{{panier.libelle}}';
        
        \$('.panierbody').append(`<div class=\"row rows-col-4 panierrow\${id}\" id='panierrow\${id}'></div>`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto imgpaniercol\${id}\"></div>`);
        \$('.imgpaniercol'+id).append(`<img class=\"panierimg\" src=\"src/img/plat/\${img}\" alt=\"\${img}\" height=\"32px\" width=\"32px\">`);
        
        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierlibelle\${id}\"></div>`);
        \$('.panierlibelle'+id).append(`\${libelle}`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierprixu\${id}\"></div>`);
        \$('.panierprixu'+id).append(`prix/u\${prix}`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierprixt\${id}\"></div>`);
        \$('.panierprixt'+id).append(`Prix/t\${newprix}`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierqte\${id}\"></div>`);
        \$('.panierqte'+id).append(`<select name=\"\${id}\" class=\"changeqte\" id=\"qteselect\${id}\"><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option><option value=\"6\">6</option><option value=\"7\">7</option><option value=\"8\">8</option><option value=\"9\">9</option></select>`);

        \$('.panierrow'+id).append(`<div class=\"col my-auto col my-auto panierpaniersup\${id}\"></div>`);
        \$('.panierpaniersup'+id).append(`<button onclick=\"dlton(\${id})\" type=\"submit\" class=\"btn deletepanierbtn\" id='deletepanierbtn' data-id=\"\${id}\"><i class=\"fa-solid fa-trash\"></i></button>`);

              if(qtevalue == 2){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
                }
               if(qtevalue == 3){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               }
               if(qtevalue == 4){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);   
               } 
               if(qtevalue == 5){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               }
               if(qtevalue == 6){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               } 
               if(qtevalue == '7'){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               } 
               if(qtevalue == '8'){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               } 
               if(qtevalue == '9'){
                \$(`#qteselect\${id} option[value=\"\${qtevalue}\"]`).prop('selected', true);
                \$('.panierprix'+id).append(`\${newprix}`);
               }
      
          
</script>
        {% endfor %}
      <button class=\"btn deletepanierbtnall\" id=\"deletepanierbtn\" data-id=\"\${id}\" onclick='dltonalll()'><i class=\"fa-solid fa-trash\"></i></button>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-outline-primary\">Valide Panier</button></a>
      </div>
    </div>
  </div>
</div>
<script
  src=\"https://code.jquery.com/jquery-3.7.0.js\"
  integrity=\"sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=\"
  crossorigin=\"anonymous\"></script>

 {% endblock %}
", "page/_panier.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/_panier.html.twig");
    }
}

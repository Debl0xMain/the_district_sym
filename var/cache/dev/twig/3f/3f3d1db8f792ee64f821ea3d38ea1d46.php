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

/* page/cgu.html.twig */
class __TwigTemplate_fee4d4b8d5caaf4327dd7894b1215f02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cgu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cgu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/cgu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo "src/Css/contact.css";
        echo "\">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1 class='cguh1'>
Conditions générales d'utilisation
</h1>
<p class='cgu'>
En vigueur au 06/06/2023
Les présentes conditions générales d'utilisation (dites « CGU ») ont pour objet l'encadrement juridique
des modalités de mise à disposition du site et des services par _______________ et de définir les
conditions d’accès et d’utilisation des services par « l'Utilisateur ».<br>
Les présentes CGU sont accessibles sur le site à la rubrique «CGU».<br>
Toute inscription ou utilisation du site implique l'acceptation sans aucune réserve ni restriction des
présentes CGU par l’utilisateur.<br> Lors de l'inscription sur le site via le Formulaire d’inscription, chaque
utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : «
Je reconnais avoir lu et compris les CGU et je les accepte ».<br>
En cas de non-acceptation des CGU stipulées dans le présent contrat, l'Utilisateur se doit de renoncer
à l'accès des services proposés par le site.<br>
the-district se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes
CGU.<br></p>
<h2 class=\"cguh2\">
Article 1 : </h2>

<p class='cgu'>Les mentions légales
L’édition et la direction de la publication du site the-district est assurée par Sellier Antoine, domicilié
afpa amiens.<br>
Numéro de téléphone est 00 00 00 00
Adresse e-mail the disttric.<br>Fr.<br>
L'hébergeur du site the-district est la société ms dev ap, dont le siège social est situé au afpa, avec le
numéro de téléphone : 00 00 00 00 00.<br></p>
<h2 class=\"cguh2\">
ARTICLE 2 : Accès au site
</h2>
<p class='cgu'>
Le site the-district permet à l'Utilisateur un accès gratuit aux services suivants :
Le site internet propose les services suivants :
travail ms
Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet.<br> Tous les
frais supportés par l'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion
Internet, etc.<br>) sont à sa charge.<br>
L’Utilisateur non membre n'a pas accès aux services réservés.<br> Pour cela, il doit s’inscrire en
remplissant le formulaire.<br> En acceptant de s’inscrire aux services réservés, l’Utilisateur membre
s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées,
notamment son adresse email.<br>
1
Pour accéder aux services, l’Utilisateur doit ensuite s'identifier à l'aide de son identifiant et de son mot
de passe qui lui seront communiqués après son inscription.<br>
Tout Utilisateur membre régulièrement inscrit pourra également solliciter sa désinscription en se
rendant à la page dédiée sur son espace personnel.<br> Celle-ci sera effective dans un délai raisonnable.<br>
Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site
ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n'engage pas
la responsabilité de the-district.<br> Dans ces cas, l’Utilisateur accepte ainsi ne pas tenir rigueur à l’éditeur
de toute interruption ou suspension de service, même sans préavis.<br>
L'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse email de
l’éditeur communiqué à l’ARTICLE 1.<br></p>
<h2 class=\"cguh2\">
ARTICLE 3 : Collecte des données
</h2>
<p class='cgu'>
Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la
mesure où il ne collecte aucune donnée concernant les Utilisateurs.<br></p>
<h2 class=\"cguh2\">
ARTICLE 4 : Propriété intellectuelle
</h2>
<p class='cgu'>
Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son…) font l'objet
d'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur.<br>
L'Utilisateur doit solliciter l'autorisation préalable du site pour toute reproduction, publication, copie des
différents contenus.<br> Il s'engage à une utilisation des contenus du site dans un cadre strictement privé,
toute utilisation à des fins commerciales et publicitaires est strictement interdite.<br>
Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation
expresse de l’exploitant du site Internet constituerait une contrefaçon sanctionnée par l’article L 335-2
et suivants du Code de la propriété intellectuelle.<br>
Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui
reproduit, copie ou publie le contenu protégé doit citer l’auteur et sa source.<br>
</p>
<h2 class=\"cguh2\">
ARTICLE 5 : Responsabilité
</h2>
<p class='cgu'>
Les sources des informations diffusées sur le site the-district sont réputées fiables mais le site ne
garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions.<br>
Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle.<br>
Malgré des mises à jour régulières, le site the-district ne peut être tenu responsable de la modification
des dispositions administratives et juridiques survenant après la publication.<br> De même, le site ne peut
être tenue responsable de l’utilisation et de l’interprétation de l’information contenue dans ce site.<br>
L'Utilisateur s'assure de garder son mot de passe secret.<br> Toute divulgation du mot de passe, quelle
que soit sa forme, est interdite.<br> Il assume les risques liés à l'utilisation de son identifiant et mot de
passe.<br> Le site décline toute responsabilité.<br>
2
Le site the-district ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter
l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à l’accès, ou au
téléchargement provenant de ce site.<br>
La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et
insurmontable d'un tiers.<br></p>
<h2 class=\"cguh2\">
ARTICLE 6 : Liens hypertextes
</h2>
<p class='cgu'>
Des liens hypertextes peuvent être présents sur le site.<br> L’Utilisateur est informé qu’en cliquant sur ces
liens, il sortira du site the-district.<br> Ce dernier n’a pas de contrôle sur les pages web sur lesquelles
aboutissent ces liens et ne saurait, en aucun cas, être responsable de leur contenu.<br></p>
<h2 class=\"cguh2\">
ARTICLE 7 : Cookies
</h2>
<p class='cgu'>
L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement
sur son logiciel de navigation.<br>
Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de
l’Utilisateur par votre navigateur et qui sont nécessaires à l’utilisation du site the-district.<br> Les cookies
ne contiennent pas d’information personnelle et ne peuvent pas être utilisés pour identifier quelqu’un.<br>
Un cookie contient un identifiant unique, généré aléatoirement et donc anonyme.<br> Certains cookies
expirent à la fin de la visite de l’Utilisateur, d’autres restent.<br>
L’information contenue dans les cookies est utilisée pour améliorer le site the-district.<br>
En naviguant sur le site, L’Utilisateur les accepte.<br>
L’Utilisateur doit toutefois donner son consentement quant à l’utilisation de certains cookies.<br>
A défaut d’acceptation, l’Utilisateur est informé que certaines fonctionnalités ou pages risquent de lui
être refusées.<br>
L’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son
logiciel de navigation.<br></p>
<h2 class=\"cguh2\">
ARTICLE 8 : Droit applicable et juridiction compétente
</h2>
<p class='cgu'>
La législation française s'applique au présent contrat.<br> En cas d'absence de résolution amiable d'un
litige né entre les parties, les tribunaux français seront seuls compétents pour en connaître.<br>
Pour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux
coordonnées inscrites à l’ARTICLE 1.<br>
CGU réalisées sur http://legalplace.<br>fr/
3</p>
<div class='row my-5'></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 8,  101 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{('src/Css/contact.css')}}\">{% endblock %}

{% block body %}
<h1 class='cguh1'>
Conditions générales d'utilisation
</h1>
<p class='cgu'>
En vigueur au 06/06/2023
Les présentes conditions générales d'utilisation (dites « CGU ») ont pour objet l'encadrement juridique
des modalités de mise à disposition du site et des services par _______________ et de définir les
conditions d’accès et d’utilisation des services par « l'Utilisateur ».<br>
Les présentes CGU sont accessibles sur le site à la rubrique «CGU».<br>
Toute inscription ou utilisation du site implique l'acceptation sans aucune réserve ni restriction des
présentes CGU par l’utilisateur.<br> Lors de l'inscription sur le site via le Formulaire d’inscription, chaque
utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : «
Je reconnais avoir lu et compris les CGU et je les accepte ».<br>
En cas de non-acceptation des CGU stipulées dans le présent contrat, l'Utilisateur se doit de renoncer
à l'accès des services proposés par le site.<br>
the-district se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes
CGU.<br></p>
<h2 class=\"cguh2\">
Article 1 : </h2>

<p class='cgu'>Les mentions légales
L’édition et la direction de la publication du site the-district est assurée par Sellier Antoine, domicilié
afpa amiens.<br>
Numéro de téléphone est 00 00 00 00
Adresse e-mail the disttric.<br>Fr.<br>
L'hébergeur du site the-district est la société ms dev ap, dont le siège social est situé au afpa, avec le
numéro de téléphone : 00 00 00 00 00.<br></p>
<h2 class=\"cguh2\">
ARTICLE 2 : Accès au site
</h2>
<p class='cgu'>
Le site the-district permet à l'Utilisateur un accès gratuit aux services suivants :
Le site internet propose les services suivants :
travail ms
Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet.<br> Tous les
frais supportés par l'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion
Internet, etc.<br>) sont à sa charge.<br>
L’Utilisateur non membre n'a pas accès aux services réservés.<br> Pour cela, il doit s’inscrire en
remplissant le formulaire.<br> En acceptant de s’inscrire aux services réservés, l’Utilisateur membre
s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées,
notamment son adresse email.<br>
1
Pour accéder aux services, l’Utilisateur doit ensuite s'identifier à l'aide de son identifiant et de son mot
de passe qui lui seront communiqués après son inscription.<br>
Tout Utilisateur membre régulièrement inscrit pourra également solliciter sa désinscription en se
rendant à la page dédiée sur son espace personnel.<br> Celle-ci sera effective dans un délai raisonnable.<br>
Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site
ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n'engage pas
la responsabilité de the-district.<br> Dans ces cas, l’Utilisateur accepte ainsi ne pas tenir rigueur à l’éditeur
de toute interruption ou suspension de service, même sans préavis.<br>
L'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse email de
l’éditeur communiqué à l’ARTICLE 1.<br></p>
<h2 class=\"cguh2\">
ARTICLE 3 : Collecte des données
</h2>
<p class='cgu'>
Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la
mesure où il ne collecte aucune donnée concernant les Utilisateurs.<br></p>
<h2 class=\"cguh2\">
ARTICLE 4 : Propriété intellectuelle
</h2>
<p class='cgu'>
Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son…) font l'objet
d'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur.<br>
L'Utilisateur doit solliciter l'autorisation préalable du site pour toute reproduction, publication, copie des
différents contenus.<br> Il s'engage à une utilisation des contenus du site dans un cadre strictement privé,
toute utilisation à des fins commerciales et publicitaires est strictement interdite.<br>
Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation
expresse de l’exploitant du site Internet constituerait une contrefaçon sanctionnée par l’article L 335-2
et suivants du Code de la propriété intellectuelle.<br>
Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui
reproduit, copie ou publie le contenu protégé doit citer l’auteur et sa source.<br>
</p>
<h2 class=\"cguh2\">
ARTICLE 5 : Responsabilité
</h2>
<p class='cgu'>
Les sources des informations diffusées sur le site the-district sont réputées fiables mais le site ne
garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions.<br>
Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle.<br>
Malgré des mises à jour régulières, le site the-district ne peut être tenu responsable de la modification
des dispositions administratives et juridiques survenant après la publication.<br> De même, le site ne peut
être tenue responsable de l’utilisation et de l’interprétation de l’information contenue dans ce site.<br>
L'Utilisateur s'assure de garder son mot de passe secret.<br> Toute divulgation du mot de passe, quelle
que soit sa forme, est interdite.<br> Il assume les risques liés à l'utilisation de son identifiant et mot de
passe.<br> Le site décline toute responsabilité.<br>
2
Le site the-district ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter
l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à l’accès, ou au
téléchargement provenant de ce site.<br>
La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et
insurmontable d'un tiers.<br></p>
<h2 class=\"cguh2\">
ARTICLE 6 : Liens hypertextes
</h2>
<p class='cgu'>
Des liens hypertextes peuvent être présents sur le site.<br> L’Utilisateur est informé qu’en cliquant sur ces
liens, il sortira du site the-district.<br> Ce dernier n’a pas de contrôle sur les pages web sur lesquelles
aboutissent ces liens et ne saurait, en aucun cas, être responsable de leur contenu.<br></p>
<h2 class=\"cguh2\">
ARTICLE 7 : Cookies
</h2>
<p class='cgu'>
L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement
sur son logiciel de navigation.<br>
Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de
l’Utilisateur par votre navigateur et qui sont nécessaires à l’utilisation du site the-district.<br> Les cookies
ne contiennent pas d’information personnelle et ne peuvent pas être utilisés pour identifier quelqu’un.<br>
Un cookie contient un identifiant unique, généré aléatoirement et donc anonyme.<br> Certains cookies
expirent à la fin de la visite de l’Utilisateur, d’autres restent.<br>
L’information contenue dans les cookies est utilisée pour améliorer le site the-district.<br>
En naviguant sur le site, L’Utilisateur les accepte.<br>
L’Utilisateur doit toutefois donner son consentement quant à l’utilisation de certains cookies.<br>
A défaut d’acceptation, l’Utilisateur est informé que certaines fonctionnalités ou pages risquent de lui
être refusées.<br>
L’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son
logiciel de navigation.<br></p>
<h2 class=\"cguh2\">
ARTICLE 8 : Droit applicable et juridiction compétente
</h2>
<p class='cgu'>
La législation française s'applique au présent contrat.<br> En cas d'absence de résolution amiable d'un
litige né entre les parties, les tribunaux français seront seuls compétents pour en connaître.<br>
Pour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux
coordonnées inscrites à l’ARTICLE 1.<br>
CGU réalisées sur http://legalplace.<br>fr/
3</p>
<div class='row my-5'></div>
{% endblock %}", "page/cgu.html.twig", "/home/antoine/Bureau/FormatioAfpa/the_district_sym/templates/page/cgu.html.twig");
    }
}

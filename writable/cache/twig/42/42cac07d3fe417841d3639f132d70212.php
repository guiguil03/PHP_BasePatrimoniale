<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* details.html.twig */
class __TwigTemplate_2728dee798f19499c7c0e19535ceca63 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "Détails de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<style>
.item-details {
    max-width: 800px;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.item-header {
    text-align: center;
    margin-bottom: 2rem;
}

.item-header h1 {
    color: #6a0dad;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.item-image {
    text-align: center;
    margin: 2rem 0;
}

.item-image img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.item-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
}

.info-group {
    margin-bottom: 1rem;
}

.info-group strong {
    color: #6a0dad;
    display: block;
    margin-bottom: 0.5rem;
}

.back-button {
    display: inline-block;
    margin-top: 2rem;
    padding: 0.8rem 1.5rem;
    background-color: #6a0dad;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.back-button:hover {
    background-color: #4a0b77;
}
</style>

<div class=\"item-details\">
    <div class=\"item-header\">
        <h1>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "nom", [], "any", false, false, false, 75), "html", null, true);
        yield "</h1>
    </div>

    ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image_url", [], "any", false, false, false, 78)) {
            // line 79
            yield "    <div class=\"item-image\">
        <img src=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image_url", [], "any", false, false, false, 80), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "nom", [], "any", false, false, false, 80), "html", null, true);
            yield "\" />
    </div>
    ";
        }
        // line 83
        yield "
    <div class=\"item-info\">
        <div class=\"info-group\">
            <strong>Description</strong>
            <p>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "adescription", [], "any", false, false, false, 87), "html", null, true);
        yield "</p>
        </div>

        <div class=\"info-group\">
            <strong>Localisation</strong>
            <p>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "localisation", [], "any", false, false, false, 92), "html", null, true);
        yield "</p>
        </div>

        <div class=\"info-group\">
            <strong>Type de matériel</strong>
            <p>";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "typeMateriel", [], "any", false, false, false, 97), "html", null, true);
        yield "</p>
        </div>

        <div class=\"info-group\">
            <strong>Capacité</strong>
            <p>";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "capacité", [], "any", false, false, false, 102), "html", null, true);
        yield "</p>
        </div>

        ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "NbTables", [], "any", false, false, false, 105)) {
            // line 106
            yield "        <div class=\"info-group\">
            <strong>Nombre de tables</strong>
            <p>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "NbTables", [], "any", false, false, false, 108), "html", null, true);
            yield "</p>
        </div>
        ";
        }
        // line 111
        yield "
        ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "NbEtudiants", [], "any", false, false, false, 112)) {
            // line 113
            yield "        <div class=\"info-group\">
            <strong>Nombre d'étudiants</strong>
            <p>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "NbEtudiants", [], "any", false, false, false, 115), "html", null, true);
            yield "</p>
        </div>
        ";
        }
        // line 118
        yield "
        ";
        // line 119
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "NbEnseignants", [], "any", false, false, false, 119)) {
            // line 120
            yield "        <div class=\"info-group\">
            <strong>Nombre d'enseignants</strong>
            <p>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "NbEnseignants", [], "any", false, false, false, 122), "html", null, true);
            yield "</p>
        </div>
        ";
        }
        // line 125
        yield "    </div>

    <a href=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("/ItemsList"), "html", null, true);
        yield "\" class=\"back-button\">Retour à la liste</a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  244 => 127,  240 => 125,  234 => 122,  230 => 120,  228 => 119,  225 => 118,  219 => 115,  215 => 113,  213 => 112,  210 => 111,  204 => 108,  200 => 106,  198 => 105,  192 => 102,  184 => 97,  176 => 92,  168 => 87,  162 => 83,  154 => 80,  151 => 79,  149 => 78,  143 => 75,  74 => 8,  67 => 7,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Détails de {{ item.nom }}
{% endblock %}

{% block content %}
<style>
.item-details {
    max-width: 800px;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.item-header {
    text-align: center;
    margin-bottom: 2rem;
}

.item-header h1 {
    color: #6a0dad;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.item-image {
    text-align: center;
    margin: 2rem 0;
}

.item-image img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.item-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
}

.info-group {
    margin-bottom: 1rem;
}

.info-group strong {
    color: #6a0dad;
    display: block;
    margin-bottom: 0.5rem;
}

.back-button {
    display: inline-block;
    margin-top: 2rem;
    padding: 0.8rem 1.5rem;
    background-color: #6a0dad;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.back-button:hover {
    background-color: #4a0b77;
}
</style>

<div class=\"item-details\">
    <div class=\"item-header\">
        <h1>{{ item.nom }}</h1>
    </div>

    {% if item.image_url %}
    <div class=\"item-image\">
        <img src=\"{{ item.image_url }}\" alt=\"{{ item.nom }}\" />
    </div>
    {% endif %}

    <div class=\"item-info\">
        <div class=\"info-group\">
            <strong>Description</strong>
            <p>{{ item.adescription }}</p>
        </div>

        <div class=\"info-group\">
            <strong>Localisation</strong>
            <p>{{ item.localisation }}</p>
        </div>

        <div class=\"info-group\">
            <strong>Type de matériel</strong>
            <p>{{ item.typeMateriel }}</p>
        </div>

        <div class=\"info-group\">
            <strong>Capacité</strong>
            <p>{{ item.capacité }}</p>
        </div>

        {% if item.NbTables %}
        <div class=\"info-group\">
            <strong>Nombre de tables</strong>
            <p>{{ item.NbTables }}</p>
        </div>
        {% endif %}

        {% if item.NbEtudiants %}
        <div class=\"info-group\">
            <strong>Nombre d'étudiants</strong>
            <p>{{ item.NbEtudiants }}</p>
        </div>
        {% endif %}

        {% if item.NbEnseignants %}
        <div class=\"info-group\">
            <strong>Nombre d'enseignants</strong>
            <p>{{ item.NbEnseignants }}</p>
        </div>
        {% endif %}
    </div>

    <a href=\"{{ base_url('/ItemsList') }}\" class=\"back-button\">Retour à la liste</a>
</div>
{% endblock %}
", "details.html.twig", "/home/guigui/site-si-patrimoine/app/Views/details.html.twig");
    }
}

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

/* listeItems.html.twig */
class __TwigTemplate_9ddd18692810129f53cadcd78ae84291 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "listeItems.html.twig", 1);
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
        yield "Liste des Items
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
        yield "
<style>
.product-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.product-item {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.product-item:hover {
    transform: translateY(-5px);
}

.product-header h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

.product-details p {
    font-size: 1rem;
    margin: 5px 0;
}

.product-details strong {
    color: #007bff;
}
</style>

<h1>Liste des Produits</h1>

<!-- Formulaire de recherche -->
<form method=\"get\" action=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("/blog"), "html", null, true);
        yield "\">
    <input type=\"text\" name=\"search\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchTerm"] ?? null), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Rechercher un produit...\" />
    <button type=\"submit\">Rechercher</button>
</form>

<!-- Affichage des produits -->
  ";
        // line 55
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) {
            // line 56
            yield "        <div class=\"product-list\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 58
                yield "                <div class=\"product-item\">
                    <div class=\"product-header\">
                        <h2>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "nom", [], "any", false, false, false, 60), "html", null, true);
                yield "</h2>
                    </div>
                    <div class=\"product-details\">
                        <p><strong>Description:</strong> ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "adescription", [], "any", false, false, false, 63), "html", null, true);
                yield "</p>
                        <p><strong>Localisation:</strong> ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "localisation", [], "any", false, false, false, 64), "html", null, true);
                yield "</p>
                        <p><strong>Type de matériel:</strong> ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "typeMateriel", [], "any", false, false, false, 65), "html", null, true);
                yield "</p>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['items'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "        </div>
    ";
        } else {
            // line 71
            yield "        <p>Aucun produit trouvé.</p>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "listeItems.html.twig";
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
        return array (  168 => 71,  164 => 69,  154 => 65,  150 => 64,  146 => 63,  140 => 60,  136 => 58,  132 => 57,  129 => 56,  127 => 55,  119 => 50,  115 => 49,  72 => 8,  65 => 7,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Liste des Items
{% endblock %}

{% block content %}

<style>
.product-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.product-item {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.product-item:hover {
    transform: translateY(-5px);
}

.product-header h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

.product-details p {
    font-size: 1rem;
    margin: 5px 0;
}

.product-details strong {
    color: #007bff;
}
</style>

<h1>Liste des Produits</h1>

<!-- Formulaire de recherche -->
<form method=\"get\" action=\"{{ base_url('/blog') }}\">
    <input type=\"text\" name=\"search\" value=\"{{ searchTerm|default('') }}\" placeholder=\"Rechercher un produit...\" />
    <button type=\"submit\">Rechercher</button>
</form>

<!-- Affichage des produits -->
  {% if items is not empty %}
        <div class=\"product-list\">
            {% for items in items %}
                <div class=\"product-item\">
                    <div class=\"product-header\">
                        <h2>{{ items.nom }}</h2>
                    </div>
                    <div class=\"product-details\">
                        <p><strong>Description:</strong> {{ items.adescription }}</p>
                        <p><strong>Localisation:</strong> {{ items.localisation }}</p>
                        <p><strong>Type de matériel:</strong> {{ items.typeMateriel }}</p>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p>Aucun produit trouvé.</p>
    {% endif %}
{% endblock %}", "listeItems.html.twig", "/home/vagrant/Site/app/Views/listeItems.html.twig");
    }
}

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
class __TwigTemplate_c4f5ef609da2e795e237419533b6bd13 extends Template
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
    grid-template-columns: repeat(auto-fill, minmax(400px, 20fr));
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
                box-shadow: 10px 10px 10px 0px grey;

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
    color: #6a0dad;
}
.input {
  color: black;
  border: 2px solid #8707ff;
  border-radius: 10px;
  padding: 10px 25px;
  background: transparent;
  max-width: 190px;
}

.input:active {
  box-shadow: 2px 2px 15px #8707ff inset;
}
</style>

<h1>Liste des élements</h1>

<form method=\"get\" action=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("/items/searchItems"), "html", null, true);
        yield "\">
    <input
        placeholder=\"Rechercher vos éléments\"
        class=\"input\"
        name=\"text\"
        type=\"text\"
        value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default(($context["search"] ?? null), "")) : ("")), "html", null, true);
        yield "\" >
    <button type=\"submit\">Rechercher</button>
</form>


  ";
        // line 74
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) {
            // line 75
            yield "        <div class=\"product-list\">
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 77
                yield "                <div class=\"product-item\">
                    <div class=\"product-header\">
                        <h2>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "nom", [], "any", false, false, false, 79), "html", null, true);
                yield "</h2>
                    </div>
                    <div class=\"product-details\">
                        <p><strong>Description:</strong> ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "adescription", [], "any", false, false, false, 82), "html", null, true);
                yield "</p>
                        <p><strong>Localisation:</strong> ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "localisation", [], "any", false, false, false, 83), "html", null, true);
                yield "</p>
                        <p><strong>Type de matériel:</strong> ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "typeMateriel", [], "any", false, false, false, 84), "html", null, true);
                yield "</p> 
                        <img src=";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["items"], "image_url", [], "any", false, false, false, 85), "html", null, true);
                yield " widht=\"100\" height=\"100\"/>
                        <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url(("details/" . CoreExtension::getAttribute($this->env, $this->source, $context["items"], "id", [], "any", false, false, false, 86))), "html", null, true);
                yield "\" class=\"input\">More Details</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['items'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "        </div>
    ";
        } else {
            // line 92
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
        return array (  195 => 92,  191 => 90,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  159 => 79,  155 => 77,  151 => 76,  148 => 75,  146 => 74,  138 => 69,  129 => 63,  72 => 8,  65 => 7,  59 => 4,  52 => 3,  41 => 1,);
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
    grid-template-columns: repeat(auto-fill, minmax(400px, 20fr));
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
                box-shadow: 10px 10px 10px 0px grey;

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
    color: #6a0dad;
}
.input {
  color: black;
  border: 2px solid #8707ff;
  border-radius: 10px;
  padding: 10px 25px;
  background: transparent;
  max-width: 190px;
}

.input:active {
  box-shadow: 2px 2px 15px #8707ff inset;
}
</style>

<h1>Liste des élements</h1>

<form method=\"get\" action=\"{{ base_url('/items/searchItems') }}\">
    <input
        placeholder=\"Rechercher vos éléments\"
        class=\"input\"
        name=\"text\"
        type=\"text\"
        value=\"{{ search | default('') }}\" >
    <button type=\"submit\">Rechercher</button>
</form>


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
                        <img src={{items.image_url}} widht=\"100\" height=\"100\"/>
                        <a href=\"{{ base_url('details/' ~ items.id) }}\" class=\"input\">More Details</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p>Aucun produit trouvé.</p>
    {% endif %}
{% endblock %}", "listeItems.html.twig", "/home/guigui/site-si-patrimoine/app/Views/listeItems.html.twig");
    }
}

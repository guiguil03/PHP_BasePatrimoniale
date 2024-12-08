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

/* addItems.html.twig */
class __TwigTemplate_3a5ca4fc24f8e42d1b3892fffb655321 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "addItems.html.twig", 1);
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
        yield "Ajouter ItemsForm

";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <title>Ajouter un Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2e2e2e;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .main-content{
            background-color:grey;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: black;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: #6a0dad;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type=\"text\"], input[type=\"file\"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #5c4b8b;
            border-radius: 4px;
            background-color: #2e2e2e;
            color: #fff;
        }

        button {
            background-color: #6a0dad;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #7e39a0;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>

    <div class=\"container\">
        <h1>Ajouter un Produit</h1>

        <!-- Affichage des erreurs de validation -->
        ";
        // line 81
        if (($context["validation"] ?? null)) {
            // line 82
            yield "            <ul class=\"error\">
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["validation"] ?? null), "getErrors", [], "method", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 84
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "            </ul>
        ";
        }
        // line 88
        yield "
        <form action=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("/Items"), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
            <div>
                <label for=\"nom\">Nom du produit</label>
                <input type=\"text\" name=\"nom\" id=\"nom\" value=\"";
        // line 92
        yield "nom";
        yield "\" required>
            </div>

            <div>
                <label for=\"adescription\">Description</label>
                <textarea name=\"adescription\" id=\"adescription\" rows=\"4\" required>";
        // line 97
        yield "adescription";
        yield "</textarea>
            </div>

            <div>
                <label for=\"localisation\">Localisation</label>
                <input type=\"text\" name=\"localisation\" id=\"localisation\" value=\"";
        // line 102
        yield "localisation";
        yield "\" required>
            </div>

            <div>
                <label for=\"typeMateriel\">Type de matériel</label>
                <input type=\"text\" name=\"typeMateriel\" id=\"typeMateriel\" value=\"";
        // line 107
        yield "typeMateriel";
        yield "\" required>
            </div>

            <div>
                <label for=\"image\">Image</label>
                <input type=\"file\" name=\"image\" id=\"image\" accept=\"image/*\" required>
            </div>

            <button type=\"submit\">Ajouter le produit</button>
        </form>
    </div>

</body>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "addItems.html.twig";
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
        return array (  202 => 107,  194 => 102,  186 => 97,  178 => 92,  172 => 89,  169 => 88,  165 => 86,  156 => 84,  152 => 83,  149 => 82,  147 => 81,  73 => 9,  66 => 8,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Ajouter ItemsForm

{% endblock %}

{% block content %}
    <title>Ajouter un Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2e2e2e;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .main-content{
            background-color:grey;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: black;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: #6a0dad;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type=\"text\"], input[type=\"file\"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #5c4b8b;
            border-radius: 4px;
            background-color: #2e2e2e;
            color: #fff;
        }

        button {
            background-color: #6a0dad;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #7e39a0;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>

    <div class=\"container\">
        <h1>Ajouter un Produit</h1>

        <!-- Affichage des erreurs de validation -->
        {% if validation %}
            <ul class=\"error\">
                {% for error in validation.getErrors() %}
                    <li>{{ error }}</li>
                {% endfor %}
            </ul>
        {% endif %}

        <form action=\"{{ base_url('/Items') }}\" method=\"post\" enctype=\"multipart/form-data\">
            <div>
                <label for=\"nom\">Nom du produit</label>
                <input type=\"text\" name=\"nom\" id=\"nom\" value=\"{{ 'nom'}}\" required>
            </div>

            <div>
                <label for=\"adescription\">Description</label>
                <textarea name=\"adescription\" id=\"adescription\" rows=\"4\" required>{{ 'adescription' }}</textarea>
            </div>

            <div>
                <label for=\"localisation\">Localisation</label>
                <input type=\"text\" name=\"localisation\" id=\"localisation\" value=\"{{ 'localisation' }}\" required>
            </div>

            <div>
                <label for=\"typeMateriel\">Type de matériel</label>
                <input type=\"text\" name=\"typeMateriel\" id=\"typeMateriel\" value=\"{{ 'typeMateriel' }}\" required>
            </div>

            <div>
                <label for=\"image\">Image</label>
                <input type=\"file\" name=\"image\" id=\"image\" accept=\"image/*\" required>
            </div>

            <button type=\"submit\">Ajouter le produit</button>
        </form>
    </div>

</body>
{% endblock %}
", "addItems.html.twig", "/home/vagrant/Site/app/Views/addItems.html.twig");
    }
}

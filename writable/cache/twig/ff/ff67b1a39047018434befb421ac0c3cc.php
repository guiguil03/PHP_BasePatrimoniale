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

/* connexion.html.twig */
class __TwigTemplate_8f1fcf123a0a52563fd263bccde5a100 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "connexion.html.twig", 1);
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
        yield "Se connecter a l'appli
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"text-center w-50 h-25 mx-auto mt-5container-fl justify-content-center\">
    <h1 class=\"text-primary\">Se connecter</h1>

    ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            yield "        <p style=\"color: red;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
    ";
        }
        // line 14
        yield "
        <div class=\"mb-3\">
            <label for=\"nom\" class=\"form-label\">Nom</label>
            <input type=\"text\" name=\"blog_title\" id=\"nom\" class=\"form-control\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"adresseMail\" class=\"form-label\">adresseMail</label>
            <input type=\"text\" name=\"adresseMail\" id=\"adresseMail\" class=\"form-control\" required>
        </div>

        <button type=\"button\" id=\"btnConnexion\" class=\"btn btn-primary\">Se Connecter</button>
</div>
";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "<script src=\"assets/js/connexion.js\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "connexion.html.twig";
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
        return array (  111 => 29,  104 => 28,  86 => 14,  80 => 12,  78 => 11,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Se connecter a l'appli
{% endblock %}

{% block body %}
<div class=\"text-center w-50 h-25 mx-auto mt-5container-fl justify-content-center\">
    <h1 class=\"text-primary\">Se connecter</h1>

    {% if error %}
        <p style=\"color: red;\">{{ error }}</p>
    {% endif %}

        <div class=\"mb-3\">
            <label for=\"nom\" class=\"form-label\">Nom</label>
            <input type=\"text\" name=\"blog_title\" id=\"nom\" class=\"form-control\" required>
        </div>

        <div class=\"mb-3\">
            <label for=\"adresseMail\" class=\"form-label\">adresseMail</label>
            <input type=\"text\" name=\"adresseMail\" id=\"adresseMail\" class=\"form-control\" required>
        </div>

        <button type=\"button\" id=\"btnConnexion\" class=\"btn btn-primary\">Se Connecter</button>
</div>
{% endblock %}
{% block javascripts %}
<script src=\"assets/js/connexion.js\"></script>
{% endblock %}
", "connexion.html.twig", "/home/vagrant/TestCodeIgniter/app/Views/connexion.html.twig");
    }
}

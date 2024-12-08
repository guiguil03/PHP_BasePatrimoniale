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

/* register.html.twig */
class __TwigTemplate_0198ee8bb87c436167db38f7cd1d3129 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "register.html.twig", 1);
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
        yield "Se connecter
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
.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  width: 100%;
  max-width: 300px;
}


.divForm {
  width: 100%;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  background: white; /* Optionnel : une couleur de fond */
  padding: 2rem; /* Optionnel : pour espacer un peu le contenu */
  border-radius: 1rem; /* Optionnel : coins arrondis */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Optionnel : ombre pour design */
}  

.form .input-span {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.form input[type=\"text\"]{
  border-radius: 0.5rem;
  padding: 1rem 0.75rem;
  width: 100%;
  border: none;
  gap: 0.5rem;
  background-color: #9c9c9c60;
  border: 2px solid #6a0dad;
;
}


.label {
  align-self: flex-start;
  color: #6a0dad;
  font-weight: 600;
}

.form .submit {
  padding: 1rem 0.75rem;
  width: 100%;
  display: flex;
  align-items: center;
  border-radius: 3rem;
  background-color: black;
  color: white;
  cursor: pointer;
  transition: all 300ms;
  font-weight: 900;
  font-size: 0.9rem;
}

.form .submit:hover {
  background-color: #6a0dad;
}

.span {
  text-decoration: none;
  color: #6a0dad;
}

.span a {
  color: #6a0dad;
}


</style>
<div class=\"divForm\">
<form class=\"form\" method=\"POST\" action=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("connexion"), "html", null, true);
        yield "\">
 <span class=\"input-span\">
    <label for=\"nom\" class=\"label\">Nom </label>
    <input type=\"text\" name=\"nom\" id=\"nom\" required
  /></span>
  <span class=\"input-span\">
    <label for=\"adresseMail\" class=\"label\">Email</label>
    <input type=\"text\" name=\"adresseMail\" id=\"adresseMail\" required
  /></span>
 
</form>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js\" integrity=\"sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

";
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "<script src=\"Assets/js/connexion.js\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "register.html.twig";
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
        return array (  181 => 105,  174 => 104,  154 => 87,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Se connecter
{% endblock %}

{% block content %}

<style>
.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  width: 100%;
  max-width: 300px;
}


.divForm {
  width: 100%;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  background: white; /* Optionnel : une couleur de fond */
  padding: 2rem; /* Optionnel : pour espacer un peu le contenu */
  border-radius: 1rem; /* Optionnel : coins arrondis */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Optionnel : ombre pour design */
}  

.form .input-span {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.form input[type=\"text\"]{
  border-radius: 0.5rem;
  padding: 1rem 0.75rem;
  width: 100%;
  border: none;
  gap: 0.5rem;
  background-color: #9c9c9c60;
  border: 2px solid #6a0dad;
;
}


.label {
  align-self: flex-start;
  color: #6a0dad;
  font-weight: 600;
}

.form .submit {
  padding: 1rem 0.75rem;
  width: 100%;
  display: flex;
  align-items: center;
  border-radius: 3rem;
  background-color: black;
  color: white;
  cursor: pointer;
  transition: all 300ms;
  font-weight: 900;
  font-size: 0.9rem;
}

.form .submit:hover {
  background-color: #6a0dad;
}

.span {
  text-decoration: none;
  color: #6a0dad;
}

.span a {
  color: #6a0dad;
}


</style>
<div class=\"divForm\">
<form class=\"form\" method=\"POST\" action=\"{{ base_url('connexion') }}\">
 <span class=\"input-span\">
    <label for=\"nom\" class=\"label\">Nom </label>
    <input type=\"text\" name=\"nom\" id=\"nom\" required
  /></span>
  <span class=\"input-span\">
    <label for=\"adresseMail\" class=\"label\">Email</label>
    <input type=\"text\" name=\"adresseMail\" id=\"adresseMail\" required
  /></span>
 
</form>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js\" integrity=\"sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

{% endblock %}


{% block javascripts %}
<script src=\"Assets/js/connexion.js\"></script>
{% endblock %}
", "register.html.twig", "/home/vagrant/Site/app/Views/register.html.twig");
    }
}

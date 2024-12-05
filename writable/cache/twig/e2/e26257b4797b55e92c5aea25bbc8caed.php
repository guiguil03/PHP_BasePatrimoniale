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

/* base.html.twig */
class __TwigTemplate_446770df23afe59675669eff5291948f extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "</head>
<body>
    
    <nav class=\" p-3 text-primary-emphasis  border border-primary-subtle rounded-3\">
    <div class=\"container-fl text-center d-flex justify-content-center align-items-center\">
      <a class=\"nav-link mx-3\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("/"), "html", null, true);
        yield "\" >
            <img src=\"./Assets/maison.png\" alt=\"Home\"  />
        </a>        
        <a class=\"navbar-brand mx-3\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("test"), "html", null, true);
        yield "\">Test</a>
        ";
        // line 23
        yield "        <a class=\"nav-link mx-3\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("addBlogForm"), "html", null, true);
        yield "\">Formulaire</a>
       <a class=\"nav-link mx-3\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("ConnexionForm"), "html", null, true);
        yield "\">Connexion</a>

    </div>
</nav>

     <div class=\"container my-4 row d-flex\">
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 34
        yield "</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js\" integrity=\"sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
";
        // line 37
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 39
        yield "</body>
</html>
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Welcome!";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "<link href=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/css/themes/bootstrap/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-nQQlHXZO4YmST3YDqk/JU3f1t2D58a/nPd1QbiLecouKn68glzRym4BlOxlr5Rrg\" crossorigin=\"anonymous\">
    ";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "      
      
    ";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  147 => 37,  140 => 31,  133 => 30,  121 => 11,  110 => 5,  103 => 39,  101 => 37,  96 => 34,  94 => 30,  85 => 24,  80 => 23,  76 => 21,  70 => 18,  63 => 13,  61 => 11,  52 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    
    {% block stylesheets %}<link href=\"https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/css/themes/bootstrap/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-nQQlHXZO4YmST3YDqk/JU3f1t2D58a/nPd1QbiLecouKn68glzRym4BlOxlr5Rrg\" crossorigin=\"anonymous\">
    {% endblock %}
</head>
<body>
    
    <nav class=\" p-3 text-primary-emphasis  border border-primary-subtle rounded-3\">
    <div class=\"container-fl text-center d-flex justify-content-center align-items-center\">
      <a class=\"nav-link mx-3\" href=\"{{ base_url('/') }}\" >
            <img src=\"./Assets/maison.png\" alt=\"Home\"  />
        </a>        
        <a class=\"navbar-brand mx-3\" href=\"{{ base_url('test') }}\">Test</a>
        {# <a class=\"nav-link mx-3\" href=\"{{ base_url('home') }}\">Accueil</a> #}
        <a class=\"nav-link mx-3\" href=\"{{ base_url('addBlogForm') }}\">Formulaire</a>
       <a class=\"nav-link mx-3\" href=\"{{ base_url('ConnexionForm') }}\">Connexion</a>

    </div>
</nav>

     <div class=\"container my-4 row d-flex\">
    {% block body %}
      
      
    {% endblock %}
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js\" integrity=\"sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
{% block javascripts %}
{% endblock %}
</body>
</html>
", "base.html.twig", "/home/vagrant/TestCodeIgniter/app/Views/base.html.twig");
    }
}

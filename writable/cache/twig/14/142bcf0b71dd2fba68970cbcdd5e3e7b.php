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
class __TwigTemplate_729e3d4df9007b1cc0f15d5acc01f1d9 extends Template
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
            'content' => [$this, 'block_content'],
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
    <link rel=\"stylesheet\" href=\"custom.css\">

    
    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 15
        yield "    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Barre du haut */
        .top-bar {
            background-color: #000;
            color: #fff;
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .img{
            mix-blend-mode: multiply;
        }
        .top-bar .logo-container {
            display: flex;
            align-items: center;
        }
        .top-bar .logo-container img {
            height: 40px;
            margin-right: 10px;
        }
        .top-bar .logo-container .title {
            font-size: 20px;
            font-weight: bold;
        }
        .top-bar .identifier {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            padding: 10px;
            border-radius: 5px;
        }
        .top-bar .identifier:hover {
            background-color: #6a0dad;
        }

        .sidebar {
            background-color: #000;
            color: #fff;
            width: 250px;
            height: calc(100vh - 60px); 
            position: fixed;
            top: 60px; 
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .title{
            color:#6a0dad;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            margin: 15px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #6a0dad; 
        }
        .sidebar .logo {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 30px;
        }

      
        .main-content {
            margin-left: 250px;
            margin-top: 60px; 
            padding: 20px;
            background-color: #f9f9f9;
            min-height: calc(100vh - 60px); 
        }

       
        .dashboard-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .charts {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }
        .chart {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 300px;
            max-width: 45%;
        }
    </style>
</head>
<body>
    <div class=\"top-bar\">
        <div class=\"logo-container\">
        <img src=\"Assets/logo.png\"/>
            <div class=\"title\">HERITAGE DATABASES</div>
        </div>
        <a href=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("connexionForm"), "html", null, true);
        yield "\" class=\"identifier\">Se connecter</a>
    </div>

    <div class=\"sidebar\">
        <a href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("/"), "html", null, true);
        yield "\"> Accueil</a>
        <a href=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("ItemsForm"), "html", null, true);
        yield "\">Ajout d'un élément</a>
        <a href=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path_maps"] ?? null), "html", null, true);
        yield "\">Maps</a>
        <a href=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("elements"), "html", null, true);
        yield "\">Consultation des éléments</a>
    </div>

    <div class=\"main-content\">
       ";
        // line 145
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 159
        yield "    </div>

    <!-- Intégration de Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Exemple de données pour les graphiques
        const barCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Catégorie A', 'Catégorie B', 'Catégorie C', 'Catégorie D'],
                datasets: [{
                    label: 'Valeurs',
                    data: [12, 19, 3, 5],
                    backgroundColor: ['#6a0dad', '#8e44ad', '#9b59b6', '#be90d4']
                }]
            }
        });

        const lineCtx = document.getElementById('lineChart').getContext('2d');
        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7'],
                datasets: [{
                    label: 'Courbe 1',
                    data: [1, 2, 1, 3, -1, -2, 1],
                    borderColor: '#6a0dad',
                    borderWidth: 2
                }, {
                    label: 'Courbe 2',
                    data: [-1, -2, -1, -3, 1, 2, -1],
                    borderColor: '#3498db',
                    borderWidth: 2
                }]
            }
        });

        const pieCtx = document.getElementById('pieChart').getContext('2d');
        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Catégorie 1', 'Catégorie 2', 'Catégorie 3', 'Catégorie 4'],
                datasets: [{
                    data: [35, 25, 20, 20],
                    backgroundColor: ['#6a0dad', '#8e44ad', '#3498db', '#9b59b6']
                }]
            }
        });
    </script>
    
   
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js\" integrity=\"sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
";
        // line 214
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 216
        yield "</body>
</html>";
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

    // line 13
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

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
        yield "    <div class=\"dashboard-title\">Tableau de Bord</div>
    <div class=\"charts\">
        <div class=\"chart\">
            <canvas id=\"barChart\"></canvas>
        </div>
        <div class=\"chart\">
            <canvas id=\"lineChart\"></canvas>
        </div>
        <div class=\"chart\">
            <canvas id=\"pieChart\"></canvas>
        </div>
    </div>
    ";
        yield from [];
    }

    // line 214
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
        return array (  326 => 214,  309 => 146,  302 => 145,  290 => 13,  279 => 5,  273 => 216,  271 => 214,  214 => 159,  212 => 145,  205 => 141,  201 => 140,  197 => 139,  193 => 138,  186 => 134,  65 => 15,  63 => 13,  52 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/home/vagrant/Site/app/Views/base.html.twig");
    }
}

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

/* map_view.html.twig */
class __TwigTemplate_a89ffe6055102504808d8f00f9e84b7e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "map_view.html.twig", 1);
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
        yield "Maps
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
        yield " <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["api_key"] ?? null), "html", null, true);
        yield "\"></script>
    <script>
        function initMap() {
            const evryBounds = {
                north: 49.600,
                south: 40.500,
                east: 2.4700,
                west: 2.4021
            };

            const evryCenter = { lat: 48.629828, lng:2.401782 };

            const map = new google.maps.Map(document.getElementById(\"map\"), {
                zoom: 6,
                center: evryCenter,
               
                restriction: {
                    latLngBounds: evryBounds,
                     
                    strictBounds: true
                }
            });

            const marker = new google.maps.Marker({
                position: evryCenter,
                map: map,
                title: \"Évry\"
            });
        }
    </script>
</head>
<body onload=\"initMap()\">
    <h1>Carte d'Évry</h1>
    <div id=\"map\"></div>
</body>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "map_view.html.twig";
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
        return array (  80 => 14,  72 => 8,  65 => 7,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Maps
{% endblock %}

{% block content %}
 <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
    <script src=\"https://maps.googleapis.com/maps/api/js?key={{ api_key }}\"></script>
    <script>
        function initMap() {
            const evryBounds = {
                north: 49.600,
                south: 40.500,
                east: 2.4700,
                west: 2.4021
            };

            const evryCenter = { lat: 48.629828, lng:2.401782 };

            const map = new google.maps.Map(document.getElementById(\"map\"), {
                zoom: 6,
                center: evryCenter,
               
                restriction: {
                    latLngBounds: evryBounds,
                     
                    strictBounds: true
                }
            });

            const marker = new google.maps.Marker({
                position: evryCenter,
                map: map,
                title: \"Évry\"
            });
        }
    </script>
</head>
<body onload=\"initMap()\">
    <h1>Carte d'Évry</h1>
    <div id=\"map\"></div>
</body>
{% endblock %}
", "map_view.html.twig", "/home/vagrant/Site/app/Views/map_view.html.twig");
    }
}

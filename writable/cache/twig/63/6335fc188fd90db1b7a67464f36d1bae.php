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
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color:rgb(255, 255, 255);
            color: black;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color:  #5c4b8b;
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
            background-color: white;
            color: black;
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
       
        .supp, .add{
            background-color:white;
            color: black;
            width:30%;
            border: 1px solid #5c4b8b;
            position:relative;
            text-align:center;
           
        }
        .class{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .container div {
            margin: 10px;
        }
        input, select {
            background-color:white;
            color: black;
            border: 1px solid #5c4b8b;
            
        }
        
    </style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    let materielCount = 1; 

    document.getElementById('add-materiel').addEventListener('click', function () {
        materielCount++;
        const materielList = document.getElementById('materiels-list');

        const newMateriel = document.createElement('div');
        newMateriel.className = 'materiel-item';
        newMateriel.innerHTML = `
            <label for=\"typeMateriel_\${materielCount}\">Matériel</label>
            <select name=\"typeMateriel[]\" id=\"typeMateriel_\${materielCount}\" required>
                <option value=\"\">-- Sélectionnez le type --</option>
                <option value=\"ordinateur\">Ordinateur</option>
                <option value=\"tablette\">Tablette</option>
                <option value=\"imprimante\">Imprimante</option>
                 <option value=\"extincteur\">Extincteur</option>
                 <option value=\"extincteur\">VideoProjecteurs</option>
                <option value=\"extincteur\">Copieurs</option>
            </select>
            <label for=\"quantite_\${materielCount}\">Quantité</label>
            <input type=\"number\" name=\"quantite[]\" id=\"quantite_\${materielCount}\" min=\"1\" value=\"1\" required>
            <button type=\"button\" class=\" supp remove-item\" onclick=\"removeMateriel(this)\">Supprimer</button>
        `;

        materielList.appendChild(newMateriel);
    });

    window.removeMateriel = function (button) {
        const materielItem = button.parentElement;
        materielItem.remove();
    };
});
</script>

</head>
<body>

    <div class=\"container\">
        <h1>Ajouter un élément</h1>

        ";
        // line 139
        if (($context["validation"] ?? null)) {
            // line 140
            yield "            <ul class=\"error\">
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["validation"] ?? null), "getErrors", [], "method", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 142
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "            </ul>
        ";
        }
        // line 146
        yield "
        <form class=\"form\" method=\"POST\" action=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(base_url("/Items"), "html", null, true);
        yield "\"  enctype=\"multipart/form-data\">
            <div>
                <label for=\"nom\">Nom de la salle</label>
                <input type=\"text\" name=\"nom\" id=\"nom\" value=\"";
        // line 150
        yield "nom";
        yield "\" required>
            </div>

            <div>
                <label for=\"adescription\">Description</label>
                <textarea name=\"adescription\" id=\"adescription\" rows=\"3\" required></textarea>
            </div>

            <div>
                <label for=\"campus\">Campus</label>
                <input type=\"text\" name=\"campus\" id=\"campus\" value=\"";
        // line 160
        yield "campus";
        yield "\" required>
            </div>

           <div class=\"loc\">
        <label for=\"localisation\"> localisation </label>
        <select name=\"localisation\" id=\"localisation\" required>
            <option value=\"\">-- Sélectionnez un lieu --</option>
            <option value=\"Batiments Maupertuis\" >Batiments Maupertuis</option>
            <option value=\"Premier Cycle\" >Premier Cycle</option>
            <option value=\"IDF\" >IDF</option>
        </select>
        </div>


        <div class=\"materiel-container\">
    <div id=\"materiels-list\">
        <div class=\"materiel-item\">
            <label for=\"typeMateriel_1\">Matériel</label>
            <select name=\"typeMateriel[]\" id=\"typeMateriel_1\" required>
                <option value=\"\">-- Sélectionnez le type --</option>
                <option value=\"ordinateur\">Ordinateur</option>
                <option value=\"tablette\">Tablette</option>
                <option value=\"imprimante\">Imprimante</option>
                <option value=\"extincteur\">Extincteur</option>
                <option value=\"extincteur\">VideoProjecteurs</option>

                <option value=\"extincteur\">Copieurs</option>

            </select>
            <label for=\"quantite_1\">Quantité</label>
            <input type=\"number\" name=\"quantite[]\" id=\"quantite_1\" min=\"1\" value=\"1\" required>
            <div class=\"class\">
            <button type=\"button\" class=\"add\" id=\"add-materiel\">Ajouter un matériel</button>
        </div>
    </div>
    
    </div>

            <div>
                <label for=\"Capacité\">Capacité</label>
                <input type=\"number\" name=\"Capacité\" id=\"Capacité\" min=\"0\" value=\"";
        // line 200
        yield "Capacité";
        yield "\" required>
            </div>
            <div>
                <label for=\"NombreTables\">Nombre de Tables</label>
                <input type=\"number\" name=\"NombreTables\" id=\"NombreTables\" min=\"0\" value=\"";
        // line 204
        yield "NombreTables";
        yield "\" required>
            </div>
             <div>
                <label for=\"NombreEtudiants\">Nombre d'étudiants</label>
                <input type=\"number\" name=\"NombreEtudiants\" id=\"NombreEtudiants\" min=\"0\"value=\"";
        // line 208
        yield "NombreEtudiants";
        yield "\" required>
            </div>
             <div>
                <label for=\"NombreEnseignants\">Nombre d'enseignants</label>
                <input type=\"number\" name=\"NombreEnseignants\" id=\"NombreEnseignants\"min=\"0\" value=\"";
        // line 212
        yield "NombreEnseignants";
        yield "\" required>
            </div>
             <div>
                <label for=\"campus\">Image</label>
                <input type=\"text\" name=\"image_url\" id=\"image_url\" value=\"";
        // line 216
        yield "image_url";
        yield "\" required>
            </div>

          
            

           

            <button type=\"submit\">Ajouter l'élément</button>
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
        return array (  320 => 216,  313 => 212,  306 => 208,  299 => 204,  292 => 200,  249 => 160,  236 => 150,  230 => 147,  227 => 146,  223 => 144,  214 => 142,  210 => 141,  207 => 140,  205 => 139,  73 => 9,  66 => 8,  59 => 4,  52 => 3,  41 => 1,);
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
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color:rgb(255, 255, 255);
            color: black;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color:  #5c4b8b;
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
            background-color: white;
            color: black;
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
       
        .supp, .add{
            background-color:white;
            color: black;
            width:30%;
            border: 1px solid #5c4b8b;
            position:relative;
            text-align:center;
           
        }
        .class{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .container div {
            margin: 10px;
        }
        input, select {
            background-color:white;
            color: black;
            border: 1px solid #5c4b8b;
            
        }
        
    </style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    let materielCount = 1; 

    document.getElementById('add-materiel').addEventListener('click', function () {
        materielCount++;
        const materielList = document.getElementById('materiels-list');

        const newMateriel = document.createElement('div');
        newMateriel.className = 'materiel-item';
        newMateriel.innerHTML = `
            <label for=\"typeMateriel_\${materielCount}\">Matériel</label>
            <select name=\"typeMateriel[]\" id=\"typeMateriel_\${materielCount}\" required>
                <option value=\"\">-- Sélectionnez le type --</option>
                <option value=\"ordinateur\">Ordinateur</option>
                <option value=\"tablette\">Tablette</option>
                <option value=\"imprimante\">Imprimante</option>
                 <option value=\"extincteur\">Extincteur</option>
                 <option value=\"extincteur\">VideoProjecteurs</option>
                <option value=\"extincteur\">Copieurs</option>
            </select>
            <label for=\"quantite_\${materielCount}\">Quantité</label>
            <input type=\"number\" name=\"quantite[]\" id=\"quantite_\${materielCount}\" min=\"1\" value=\"1\" required>
            <button type=\"button\" class=\" supp remove-item\" onclick=\"removeMateriel(this)\">Supprimer</button>
        `;

        materielList.appendChild(newMateriel);
    });

    window.removeMateriel = function (button) {
        const materielItem = button.parentElement;
        materielItem.remove();
    };
});
</script>

</head>
<body>

    <div class=\"container\">
        <h1>Ajouter un élément</h1>

        {% if validation %}
            <ul class=\"error\">
                {% for error in validation.getErrors() %}
                    <li>{{ error }}</li>
                {% endfor %}
            </ul>
        {% endif %}

        <form class=\"form\" method=\"POST\" action=\"{{ base_url('/Items') }}\"  enctype=\"multipart/form-data\">
            <div>
                <label for=\"nom\">Nom de la salle</label>
                <input type=\"text\" name=\"nom\" id=\"nom\" value=\"{{ 'nom'}}\" required>
            </div>

            <div>
                <label for=\"adescription\">Description</label>
                <textarea name=\"adescription\" id=\"adescription\" rows=\"3\" required></textarea>
            </div>

            <div>
                <label for=\"campus\">Campus</label>
                <input type=\"text\" name=\"campus\" id=\"campus\" value=\"{{ 'campus'}}\" required>
            </div>

           <div class=\"loc\">
        <label for=\"localisation\"> localisation </label>
        <select name=\"localisation\" id=\"localisation\" required>
            <option value=\"\">-- Sélectionnez un lieu --</option>
            <option value=\"Batiments Maupertuis\" >Batiments Maupertuis</option>
            <option value=\"Premier Cycle\" >Premier Cycle</option>
            <option value=\"IDF\" >IDF</option>
        </select>
        </div>


        <div class=\"materiel-container\">
    <div id=\"materiels-list\">
        <div class=\"materiel-item\">
            <label for=\"typeMateriel_1\">Matériel</label>
            <select name=\"typeMateriel[]\" id=\"typeMateriel_1\" required>
                <option value=\"\">-- Sélectionnez le type --</option>
                <option value=\"ordinateur\">Ordinateur</option>
                <option value=\"tablette\">Tablette</option>
                <option value=\"imprimante\">Imprimante</option>
                <option value=\"extincteur\">Extincteur</option>
                <option value=\"extincteur\">VideoProjecteurs</option>

                <option value=\"extincteur\">Copieurs</option>

            </select>
            <label for=\"quantite_1\">Quantité</label>
            <input type=\"number\" name=\"quantite[]\" id=\"quantite_1\" min=\"1\" value=\"1\" required>
            <div class=\"class\">
            <button type=\"button\" class=\"add\" id=\"add-materiel\">Ajouter un matériel</button>
        </div>
    </div>
    
    </div>

            <div>
                <label for=\"Capacité\">Capacité</label>
                <input type=\"number\" name=\"Capacité\" id=\"Capacité\" min=\"0\" value=\"{{ 'Capacité' }}\" required>
            </div>
            <div>
                <label for=\"NombreTables\">Nombre de Tables</label>
                <input type=\"number\" name=\"NombreTables\" id=\"NombreTables\" min=\"0\" value=\"{{ 'NombreTables' }}\" required>
            </div>
             <div>
                <label for=\"NombreEtudiants\">Nombre d'étudiants</label>
                <input type=\"number\" name=\"NombreEtudiants\" id=\"NombreEtudiants\" min=\"0\"value=\"{{ 'NombreEtudiants' }}\" required>
            </div>
             <div>
                <label for=\"NombreEnseignants\">Nombre d'enseignants</label>
                <input type=\"number\" name=\"NombreEnseignants\" id=\"NombreEnseignants\"min=\"0\" value=\"{{ 'NombreEnseignants' }}\" required>
            </div>
             <div>
                <label for=\"campus\">Image</label>
                <input type=\"text\" name=\"image_url\" id=\"image_url\" value=\"{{ 'image_url'}}\" required>
            </div>

          
            

           

            <button type=\"submit\">Ajouter l'élément</button>
        </form>
    </div>

</body>
{% endblock %}
", "addItems.html.twig", "/home/vagrant/Site/app/Views/addItems.html.twig");
    }
}

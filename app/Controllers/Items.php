<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Items extends BaseController
{
    public function index()
    {
    }

    public function ItemsForm() :string{
        return $this->twig->render("AddItems.html");

    }
    public function Items() :string{
        $nom= $this->request->getPost("nom");
        $description= $this->request->getPost("decription");
        $localisation= $this->request->getpost("localisation");
        $type= $this->request->getpost("typeMateriel");
        $db = \Config\Database::connect();

        if (empty($nom) || empty($description)) {
            return $this->twig->render('AddItems.html', [
                'error' => 'Tous les champs sont obligatoires.'
            ]);
        }

        $sql= " INSERT INTO Items (nom, description, localisation, typeMateriel) VALUES (:nom:, :description:, :localisation:, :typeMateriel:)";
        $db->query($sql, [
            'nom' => $nom,
            'description' => $description,
            'localisation' => $localisation,
            'typeMateriel' => $typeMateriel,
        ]);
    }
    
}

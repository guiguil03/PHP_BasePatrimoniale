<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \Kenjis\CI4Twig\Twig;


class Items extends BaseController
{
   
    public function ItemsList() :string{
        $db = \Config\Database::connect(); 
        
        $query = $db->query("SELECT * FROM Items");
        $data['items'] = $query->getResult(); 
        if (empty($data['items'])) {
            log_message('error', 'Aucun produit trouvé dans la base de données');
        }

        return $this->twig->render("listeItems.html", $data);
    }
    
    public function ItemsForm() :string{
        return $this->twig->render("addItems.html");

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
            'typeMateriel' => $typeMateriel
        ]);
    }
    
}

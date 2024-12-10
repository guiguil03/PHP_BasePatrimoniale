<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \Kenjis\CI4Twig\Twig;


class Items extends BaseController
{
   

    public function searchItems() :string {
        $searchTerm = $this->request->getGet("text");  
        $db = \Config\Database::connect(); 
        
        if (empty($searchTerm)) {
            $query = $db->query("SELECT * FROM Items");
        } else {
            $query = $db->query("SELECT * FROM Items WHERE nom LIKE :searchTerm: OR adescription LIKE :searchTerm: OR localisation LIKE :searchTerm: OR typeMateriel LIKE :searchTerm:" , [
                'searchTerm' => '%' . $searchTerm . '%'
            ]);
        }
    
        $data['items'] = $query->getResult();
    
        if (empty($data['items'])) {
            log_message('error', 'Aucun produit trouvé pour la recherche: ' . $searchTerm);
        }
    
        return $this->twig->render("listeItems.html", $data);
    }
    
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
    public function Items() : string
    {
        // Récupération des données du formulaire
        $nom = $this->request->getPost("nom");
        $description = $this->request->getPost("adescription");
        $localisation = $this->request->getPost("localisation");
        $typeMateriel = $this->request->getPost("typeMateriel");
        $quantite = $this->request->getPost("quantite");
        $capacite = $this->request->getPost("Capacité");
        $nbTables = $this->request->getPost("NombreTables");
        $nbEtudiants = $this->request->getPost("NombreEtudiants");
        $nbEnseignants = $this->request->getPost("NombreEnseignants");
        $imageUrl = $this->request->getPost("image_url");
    
        $db = \Config\Database::connect();
    
        // Validation des champs obligatoires
        if (empty($nom) || empty($description) || empty($localisation) || empty($typeMateriel) || empty($capacite)) {
            return $this->twig->render('addItems.html', [
                'error' => 'Tous les champs obligatoires doivent être remplis.'
            ]);
        }
    
        // Insertion dans la base de données
        foreach ($typeMateriel as $index => $materiel) {
            $sql = "INSERT INTO Items (nom, adescription, localisation, typeMateriel, quantité, capacité, NbTables, NbEtudiants, NbEnseignants, image_url)
                    VALUES (:nom:, :adescription:, :localisation:, :typeMateriel:, :quantité:, :capacité:, :NbTables:, :NbEtudiants:, :NbEnseignants:, :image_url:)";
    
            $db->query($sql, [
                'nom'           => $nom,
                'adescription'  => $description,
                'localisation'  => $localisation,
                'typeMateriel'  => $materiel,
                'quantité'      => $quantite[$index],
                'capacité'      => $capacite,
                'NbTables'      => $nbTables,
                'NbEtudiants'   => $nbEtudiants,
                'NbEnseignants' => $nbEnseignants,
                'image_url'     => $imageUrl,
            ]);
        }
    
        // Redirection ou affichage de confirmation
        return $this->twig->render('base.html', [
            'good' => "L'élément a été créé avec succès."
        ]);
    }
    


    public function details($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('Items'); // Remplacez par le nom de votre table
        $item = $builder->getWhere(['id' => $id])->getRow();

        if (!$item) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Item not found');
        }

        return view('details', ['item' => $item]);
    }
    
}

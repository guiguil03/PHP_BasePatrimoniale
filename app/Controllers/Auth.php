<?php

namespace App\Controllers;
use App\Models\BlogModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function __construct()
    {
        if (!session()->has('nom')) {
            session()->set('nom', ''); 
        }
    }

    public function RegisterForm():string{
        return $this->twig-> render('register.html');
    }
    public function Register()
    {
        $nom = $this->request->getPost('nom');
        $adresseMail = $this->request->getPost('adresseMail');
        $db = \Config\Database::connect();

        $check = "SELECT COUNT(*) AS count FROM User WHERE adresseMail = ? ";
        $query_check = $db->query($check, [$adresseMail]);
        $result = $query_check->getRow();


        
        if (empty($nom) || empty($adresseMail)) {
            return $this->twig->render('register.html', [
                'error' => 'Tous les champs sont obligatoires.'
            ]);
        }
        

        if($result -> count>0){
            return $this->twig->render('register.html', [
                'error' => 'L adresse mail est deja utilisé'
            ]);
        }else{
            $sql = "INSERT INTO User (nom, adresseMail) VALUES (:nom:, :adresseMail:)";
            $db->query($sql, [
                'nom' => $nom,
                'adresseMail' => $adresseMail,
            ]);
            
            
            return $this->twig-> render('base.html', [
                'good' => 'l utilisateur à été crée'
            ]);
        }

    }

    public function ConnexionForm() :string{
        return $this->twig->render('connexion.html');
    }

    public function Connexion() {
        $nom = $this->request->getVar("nom");
        $adresseMail =$this->request->getVar("adresseMail");
        $db = \Config\Database::connect();
        $builder= $db->table('User');

        if(empty($nom) || empty($adresseMail)){
            return redirect()->back()->with('error', 'Veuillez remplir tous les champs.');
        }

        $query = $builder-> getWhere(['nom'=> $nom, 'adresseMail'=> $adresseMail]);
        $response = $query->getRow();

        $data = [];
        if ($response) {
            // Lors de la connexion, enregistrez le nom dans la session
            session()->set('nom', $response->nom);
            $data['connected'] = true;
        } else {
            $data['connected'] = false;
        }
        return $this->response->setJSON($data);
        // if($response){
        //     return $this->twig->render("base.html", [
        //         'good' => 'Vous etes bien connecté']);
        // }else{
        //     return redirect()->back()->with('error', 'Nom ou prénom incorrect.');
        // 



    }
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/connexion')->with('good', 'Vous vous êtes déconnecté.');
    }

    public function connected():string{
        return $this->twig-render("connected.html");
    }
}
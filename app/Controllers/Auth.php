<?php

namespace App\Controllers;
use App\Models\BlogModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Helpers\UserHelper;

use \Kenjis\CI4Twig\Twig;



class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function __construct()
    {
        // Vérifiez que la session est bien démarrée
        if (!session()->has('nom')) {
            session()->set('nom', '');  // Vous pouvez définir une valeur par défaut ici
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

// Use '?' as a placeholder and pass the parameters in an array
        $check = "SELECT COUNT(*) AS count FROM blog WHERE adresseMail = ? ";
        $query_check = $db->query($check, [$adresseMail]);
        $result = $query_check->getRow(); // Fetch a single result row


        
        if (empty($nom) || empty($adresseMail)) {
            return $this->twig->render('register.html', [
                'error' => 'Tous les champs sont obligatoires.'
            ]);
        }
        

        if($result -> count>0){
            return $this->twig->render('registerForm.html', [
                'error' => 'L adresse mail est deja utilisé'
            ]);
        }else{
            $sql = "INSERT INTO blog (nom, adresseMail) VALUES (:nom:, :adresseMail:)";
            $db->query($sql, [
                'nom' => $nom,
                'adresseMail' => $adresseMail,
            ]);
            
            
            return $this->twig-> render('base.html', [
                'good' => 'l utilisateur à été crée'
            ]);
        }

    }

    public function connexionForm() :string{
        return $this->twig->render('connexion.html');
    }

    public function connexion() {
        $nom = $this->request->getVar("nom");
        $adresseMail =$this->request->getVar("mail");
        $db = \Config\Database::connect();
        $builder= $db->table('blog');

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
        return $this->twig-render("/");
    }
}

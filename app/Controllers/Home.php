<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Home extends BaseController
{
    public function index(): string
    {
        return $this->twig->render('base.html');
    }
    


    public function home():string{
        return $this->twig->render('welcome_message');
    }

    public function elements(): string{
        return $this->twig->render('elements.html');
    }
    
}
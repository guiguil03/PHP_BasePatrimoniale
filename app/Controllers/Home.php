<?php

namespace App\Controllers;
use \Daycry\Twig\Twig;

class Home extends BaseController
{

    
    public function index(): string
    {
        return $this->twig->render("base.html");
    }
    public function details() :string{
        return $this->twig->render("details.html");
    }

}
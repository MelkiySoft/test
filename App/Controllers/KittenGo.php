<?php

namespace App\Controllers;

use App\Models\Cat;
use App\View;

class KittenGo
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
    
    public function action()
    {
        $cat = new Cat('Garfield');
        $this->view->kittenName = $cat->getName();
        $this->view->kittenVoice = $cat->meow();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }
}

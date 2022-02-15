<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Menu extends Controller
{
    public function index()
    {
        echo View('templates/header');
        echo View('menu/index');
    }
}

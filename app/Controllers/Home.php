<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/welcome_message');
    }
}

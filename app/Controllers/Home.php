<?php

namespace App\Controllers;

class Home extends BaseController
{
    //create header footer for all page and go to redirect
    public function index()
    {
        echo view('common/header');
        echo view('home');
        echo view('common/footer');
    }
}

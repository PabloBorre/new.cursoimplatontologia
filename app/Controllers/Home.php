<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('inicio/head')
             . view('inicio/header')
             . view('inicio/index')
             . view('inicio/footer');
    }


    public function contacto()
    {
        return view('inicio/head')
             . view('inicio/header')
             . view('contacto/index')
             . view('inicio/footer');
    }
}

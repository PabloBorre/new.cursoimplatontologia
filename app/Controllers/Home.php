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

    public function docentes()
    {
        return view('docentes/head')
             . view('inicio/header')
             . view('docentes/index')
             . view('inicio/footer');
    }

    public function cursos()
    {
        return view('inicio/head')
             . view('inicio/header')
             . view('cursos/index')
             . view('inicio/footer');
    }
}

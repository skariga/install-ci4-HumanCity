<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {        
        $data = [
            'tittle' => 'Home | WebUcupSlebew',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('layout/header',  $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'tittle' => 'About Me |WebUcupSlebew'
        ];
        echo view('layout/header');
        echo view('pages/about');
        echo view('layout/footer');
    }

    public function contact()
    {
        echo view('layout/header');
        echo view('pages/contact');
        echo view('layout/footer');
    }
}

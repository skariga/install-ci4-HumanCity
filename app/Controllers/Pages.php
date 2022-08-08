<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {        
        $data = [
            'tittle' => 'Home |UcupSlebew'
        ];
        return view('pages/home' ,$data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'About |bUcupSlebew'
        ];
        return view('pages/about' , $data);
    }

    public function contact()
    {
        $data =[
            'tittle' => 'Contact |UcupSlebew',
            'alamat' => [
                [
                'tipe' => 'rumah',
                'alamat' => 'Jl.Mangga No. 123',
                'kota' => 'Bandung'            
            ],
            [
             'tipe' => 'kantor',
             'alamat' =>'Jl.Wahyudi No. 933',
             'kota' => 'Bandung'   
            ]

        ]
    ];
        return view('pages/contact' , $data);
 }
}

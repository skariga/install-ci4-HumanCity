<?php
namespace App\Controllers;


class Komik extends BaseController

{

    public function index()
    {
        $data = [
          'tittle' => 'Komik |UcupSlebew',
        ];
        // $komikmodel= new \App\Models\komikmodel();
        $db = \Config\Database::connect();
        $komik = $db->query("SELECT * FROM komik");
        dd($komik);
        return view ("komik/index" , $data);
    }

}
?>
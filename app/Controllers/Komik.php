<?php
namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController

{
  protected $komikModel;
  public function __construct(){

    $this->komikModel = new KomikModel();
  }

  public function index()
  {
    // $komik = $this->komikModel->findAll();

    $data = [
      'tittle' => 'Komik | UcupSlebew',
      'komik' => $this->komikModel->getKomik()
    ];
    // $komikModel = new \App\Models\KomikModel();

        return view ("komik/index" , $data);
    }

    public function detail($slug)
    {
      $komik = $this->komikModel->getKomik($slug);
      
      $data = [
        'tittle' => 'Komik | UcupSlebew',
        'komik' => $this->komikModel->getKomik($slug)
      ];

      //jika komik tidak ada di tabel
      if(empty($data['komik'])){
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik ' . $slug . ' tidak ditemukan.');
      }
    return view('komik/detail', $data);
    }


    public function create()
    {
     $data = [
      'tittle' => 'Form Tambah Data Komik'
     ];
     
     return view('komik/create', $data);
    }
    public function save()
{
  $slug = url_title($this->request->getVar('judul'), '-',true);
 $this->komikModel->save([
  'judul'=> $this->request->getVar('judul'),
  'slug'=> $slug,
  'penulis' => $this->request->getVar('penulis'),
  'penerbit' => $this->request->getVar('penerbit'),
  'sampul' => $this->request->getVar('sampul')
 ]);

session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

 return redirect()->to('/komik');

}

}


?>
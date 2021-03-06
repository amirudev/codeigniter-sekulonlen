<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->session = session();
    }

    public function index()
    {
        $beritaModel = new \App\Models\BeritaModel();
        return view('Admin/Index', [
            'pagedata' => [
                'name' => 'admin',
                'title' => 'Admin Panel'
            ],
            'data' => [
                'beritas' => $beritaModel->findAll()
            ]
        ]);
    }

    public function tambahberita()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $berita = new \App\Entities\Berita();
            $beritaModel = new \App\Models\BeritaModel();
            $berita->fill($data);
            $beritaModel->save($berita);
            return redirect()->to(site_url('admin'));
        }
        return view('Admin/TambahBerita', [
            'pagedata' => [
                'name' => 'admin',
                'title' => 'Tambah Berita Baru'
            ]
        ]);
    }
}
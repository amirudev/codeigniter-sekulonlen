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
        $idguru = $this->session->get('id');
        $beritaModel = new \App\Models\BeritaModel();
        $siswatugasModel = new \App\Models\SiswaTugasModel();
        return view('Admin/Index', [
            'pagedata' => [
                'name' => 'admin',
                'title' => 'Admin Panel'
            ],
            'data' => [
                'beritas' => $beritaModel->findAll(),
                'tugass' => $siswatugasModel->indextugas($idguru)
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
        return view('Berita/TambahBerita', [
            'pagedata' => [
                'name' => 'admin',
                'title' => 'Tambah Berita Baru'
            ]
        ]);
    }
}
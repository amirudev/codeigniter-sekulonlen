<?php
namespace App\Controllers;

class Berita extends BaseController
{
    public function index()
    {
        $beritaModel = new \App\Models\BeritaModel();
        return view('Berita/Index', [
            'pagedata' => [
                'name' => '',
                'title' => 'Daftar Berita'
            ],
            'data' => [
                'beritas' => $beritaModel->findAll()
            ]
        ]);
    }

    public function view()
    {
        $idberita = $this->request->uri->getSegment(3);
        $beritaModel = new \App\Models\BeritaModel();
        return view('Berita/ViewBerita', [
            'pagedata' => [
                'name' => '',
                'title' => 'Berita'
            ],
            'data' => [
                'berita' => $beritaModel->find($idberita),
                'beritadata' => $beritaModel->frontlist()
            ]
        ]);
    }
}
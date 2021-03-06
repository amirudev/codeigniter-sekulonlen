<?php
namespace App\Controllers;

class Berita extends BaseController
{
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
                'berita' => $beritaModel->find($idberita)
            ]
        ]);
    }
}
<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
	{
        $kelasModel = new \App\Models\KelasModel();
        $idsiswa = $this->session->get('id');

		return view('Kelas/Index', 
        [
            'pagedata' => [
                'name' => 'kelas',
                'title' => 'Daftar Kelas'
            ],
            'kelass' => [
                'data' => $kelasModel->listing($idsiswa)
            ]
        ]);
	}
}
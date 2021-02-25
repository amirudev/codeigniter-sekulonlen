<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    
    public function index()
	{
        $kelasModel = new \App\Models\KelasModel();

		return view('Kelas/Index', 
        [
            'pagedata' => [
                'name' => 'kelas',
                'title' => 'Daftar Kelas'
            ],
            'kelass' => [
                'data' => $kelasModel->listing()
            ]
        ]);
	}
}
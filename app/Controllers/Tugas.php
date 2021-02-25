<?php

namespace App\Controllers;

class Tugas extends BaseController
{
	public function index()
	{
        $tugasModel = new \App\Models\TugasModel();

		return view('Tugas/Index', 
        [
            'pagedata' => [
                'name' => 'tugas',
                'title' => 'Daftar Tugas'
            ],
            'tugass' => [
                'data' => $tugasModel->listing()
            ]
        ]);
	}
}
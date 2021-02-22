<?php

namespace App\Controllers;

class Kelas extends BaseController
{
	public function index()
	{
		return view('Kelas/Index', 
        [
            'pagedata' => [
                'name' => 'kelas',
                'title' => 'Daftar Kelas'
            ]
        ]);
	}
}
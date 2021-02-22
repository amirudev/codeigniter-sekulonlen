<?php

namespace App\Controllers;

class Tugas extends BaseController
{
	public function index()
	{
		return view('Tugas/Index', 
        [
            'pagedata' => [
                'name' => 'tugas',
                'title' => 'Daftar Tugas'
            ]
        ]);
	}
}
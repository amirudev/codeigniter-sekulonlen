<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		$this->session = session();
	}

	public function frontpage()
	{
		$tugasModel = new \App\Models\TugasModel();
		$beritaModel = new \App\Models\BeritaModel();
		$idsiswa = $this->session->get('id');
		$tugasdata = $tugasModel->listing($idsiswa);

		return view('Home/Frontpage',
		[
			'pagedata' => [
				'name' => '',
				'title' => 'Dashboard'
			],
			'data' => [
				'tugass' => $tugasdata,
				'beritas' => $beritaModel->frontlist()
			]
		]);
	}
}

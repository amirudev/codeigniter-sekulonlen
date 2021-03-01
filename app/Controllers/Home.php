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
		$idsiswa = $this->session->get('id');
		$data = $tugasModel->listing($idsiswa);

		return view('Home/Frontpage',
		[
			'pagedata' => [
				'name' => '',
				'title' => 'Dashboard'
			],
			'tugass' => [
				'data' => $data
			]
		]);
	}
}

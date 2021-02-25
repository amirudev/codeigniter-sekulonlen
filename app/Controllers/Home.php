<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function frontpage()
	{
		$tugasModel = new \App\Models\TugasModel();

		return view('Home/Frontpage',
		[
			'pagedata' => [
				'name' => '',
				'title' => 'Dashboard'
			],
			'tugass' => [
				'data' => $tugasModel->listing()
			]
		]);
	}
}

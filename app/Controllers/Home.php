<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function frontpage()
	{
		return view('Home/Frontpage',
		[
			'pagedata' => [
				'name' => '',
				'title' => 'Dashboard'
			]
		]);
	}
}

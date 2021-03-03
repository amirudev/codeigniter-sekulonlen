<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/Index', [
            'pagedata' => [
                'name' => 'admin',
                'title' => 'Admin Dashboard'
            ]
        ]);
    }
}
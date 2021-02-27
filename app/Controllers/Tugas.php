<?php

namespace App\Controllers;

class Tugas extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

	public function Index()
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

    public function Tambah()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'tambahTugas');
            $errors = $this->validation->getErrors();
            if(!$errors)
            {
                $tugasModel = new \App\Models\TugasModel();
                $tugas = new \App\Entities\Tugas();
                $timelimit_date = $data['timelimit_date'];
                $timelimit_time = $data['timelimit_time'];
                $data['time_limit'] = date('Y:m:d H:i:s', strtotime("$timelimit_date $timelimit_time"));
                $tugas->fill($data);
                $tugasModel->save($tugas);
                return redirect()->to(site_url('Tugas'));
            }
            $this->session->setFlashdata('errors', $errors);
        }
        return view('Tugas/Tambah', 
        [
            'pagedata' => [
                'name' => 'tugas',
                'title' => 'Tambah Tugas'
            ]
        ]);
    }
}
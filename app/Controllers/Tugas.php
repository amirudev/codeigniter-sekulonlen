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

		return view('Tugas/Index', [
            'pagedata' => [
                'name' => 'tugas',
                'title' => 'Daftar Tugas'
            ],
            'tugass' => [
                'data' => $tugasModel->listing()
            ]
        ]);
	}

    public function View()
    {
        $id = $this->request->uri->getSegment(3);
        $tugasModel = new \App\Models\TugasModel();
        $tugas = $tugasModel->find($id);
        $tugasid = $tugas->id;

        if($this->request->uri->getSegment(4) == 'Admin')
        {
            return view('Tugas/Edit', [
                'pagedata' => [
                    'name' => 'tugas',
                    'title' => "Tugas #$tugasid Admin"
                ],
                'tugas' => $tugas
            ]);
        }

        return view('Tugas/View', [
            'pagedata' => [
                'name' => 'tugas',
                'title' => "Tugas #$tugasid"
            ],
            'tugas' => $tugas
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
        return view('Tugas/Tambah', [
            'pagedata' => [
                'name' => 'tugas',
                'title' => 'Tambah Tugas'
            ]
        ]);
    }

    public function SubmitTugas()
    {
        if($this->request->getPost())
        {
            $tugasModel = new \App\Models\TugasModel();
            $tugas = new \App\Entities\Tugas();
            if($this->request->getFile('attachment'))
            {
                $tugas->attachment = $this->request->getFile('attachment');
            }
            $tugasModel->save($tugas);
            $id = $tugasModel->insertID();
            $segments = ['Barang', 'View', $id];
            return redirect()->to(site_url($segments));
        }
        echo 'Something went wrong';
    }

    public function Update()
    {
        return redirect()->to(site_url('Tugas'));
    }
}
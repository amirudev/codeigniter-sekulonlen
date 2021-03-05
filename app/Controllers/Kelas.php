<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->session = session();
        $this->validation = \Config\Services::validation();
    }

    public function index()
	{
        $kelasModel = new \App\Models\KelasModel();
        $idsiswa = $this->session->get('id');

		return view('Kelas/Index', 
        [
            'pagedata' => [
                'name' => 'kelas',
                'title' => 'Daftar Kelas'
            ],
            'kelass' => [
                'data' => $kelasModel->listing($idsiswa)
            ]
        ]);
	}

    public function tambah()
    {
        if($this->session->get('privilege') == 1)
        {
            $idguru = $this->session->get('id');
            if($this->request->getPost())
            {
                $data = $this->request->getPost();
                $this->validation->run($data, 'kelas');
                $errors = $this->validation->getErrors();
                if(!$errors)
                {
                    $kelas = new \App\Entities\Kelas();
                    $kelasModel = new \App\Models\KelasModel();
                    $kelas->fill($data);
                    $kelasModel->save($kelas);
                    return redirect()->to(site_url('Kelas/Index'));
                }
                $this->session->setFlashdata('errors', $errors);
            }
            return view('Kelas/Tambah', [
                'pagedata' => [
                    'name' => 'kelas',
                    'title' => 'Tambah Kelas'
                ],
                'data' => [
                    'idguru' => $idguru
                ]
            ]);
        }
        return redirect()->to(site_url('kelas/tambah'));
    }
}
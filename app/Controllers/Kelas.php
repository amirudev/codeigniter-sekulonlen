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
        if($this->session->get('privilege') == 1){
            $datakelas = $kelasModel->index($idsiswa);
        } else {
            $datakelas = $kelasModel->myclass($idsiswa);
        }

		return view('Kelas/Index', 
        [
            'pagedata' => [
                'name' => 'kelas',
                'title' => 'Daftar Kelas'
            ],
            'kelass' => [
                'data' => $datakelas
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
                    $siswakelas = new \App\Entities\SiswaKelas();
                    $siswakelasModel = new \App\Models\SiswaKelasModel();
                    $kelas->fill($data);
                    $kelasModel->save($kelas);
                    $siswakelas->user_id = $idguru;
                    $siswakelas->kelas_id = $kelasModel->insertID();
                    $siswakelasModel->save($siswakelas);
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

    public function gabung()
    {
        $idkelas = $this->request->uri->getSegment(3);
        if($idkelas)
        {
            $SiswakelasModel = new \App\Models\SiswaKelasModel();
            $siswakelas = new \App\Entities\SiswaKelas();
            $siswakelas->user_id = $this->session->get('id');
            $siswakelas->kelas_id = $idkelas;
            $SiswakelasModel->save($siswakelas);
            return redirect()->to(site_url('Kelas'));
        }
    }
}
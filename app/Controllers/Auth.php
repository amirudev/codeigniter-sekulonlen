<?php
namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function Register()
    {
        if($this->request->getPost()){
            $data = $this->request->getPost();
            $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();
            if(!$errors){
                // Jika validasi input sukses, maka lanjutkan
                $user = new \App\Entities\User();
                $userModel = new \App\Models\UserModel();
                if(!$userModel->where('username', $data['username'])){
                    $user->fill($data);
                    $user->setPassword($data['password']);
                    $userModel->save($user);
                    return redirect()->to(site_url('Home/Frontpage'));
                } else {
                    // Jika username sudah ada, maka keluar
                    $this->session->setFlashdata('errors', ['Username sudah digunakan']);
                }
            } else {
                $this->session->setFlashdata('errors', $errors);
            }
        }
        return view('Auth/Register', [
            'pagedata' => [
                'name' => '',
                'title' => ''
            ]
        ]);
    }

    public function Login()
    {
        if($this->request->getPost()){
            $data = $this->request->getPost();
            $userModel = new \App\Models\UserModel();
            $username = $data['username'];
            $password = $data['password'];
            $userAcc = $userModel->where('username', $username)->first();
            if($userAcc){
                if(password_verify($password, $userAcc->password)){
                    return redirect()->to(site_url('Home/Frontpage'));
                }
            } else {
                $this->session->setFlashdata('errors', ['Username atau Password salah']);
            }
        }
        return view('Auth/Login', [
            'pagedata' => [
                'name' => '',
                'title' => ''
            ]
        ]);
    }
}
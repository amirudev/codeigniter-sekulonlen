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
                $userModel = new \App\Models\UserModel();
                $user = new \App\Entities\User();
                $user->fill($data);
                $user->setPassword($data['password']);
                $userModel->save($user);
                return redirect()->to(site_url('Home/Frontpage'));
            }
        }
        return view('Auth/Register', [
            'pagedata' => [
                'name' => '',
                'title' => ''
            ]
        ]);
    }
}
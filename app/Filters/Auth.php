<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = NULL)
    {
        if(!session()->isLoggedIn){
            return redirect()->to(site_url('/Auth/Login'));
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response,  $arguments = NULL)
    {

    }
}
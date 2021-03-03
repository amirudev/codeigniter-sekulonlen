<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = NULL)
    {
        if(!session()->get('privilege') == 1)
        {
            return redirect()->to(site_url('Home/Frontpage'));
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response,  $arguments = NULL)
    {

    }
}
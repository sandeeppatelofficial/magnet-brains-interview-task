<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class IsAdminLoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //check role is not admin go to home
        if(session()->get('email') =="" && session()->get('role') != "admin"){
            return redirect()->to(base_url());
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //check after user login not access users
        if(session()->get('role') != "admin"){
            return redirect()->to(base_url("tasks"));
        }
    }
}
<?php
namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    //admin view all users
    public function index()
    {
        echo view('common/header');
        $model = new UserModel();
        $data['users'] = $model->paginate(10);
        $data['pager'] = $model->pager;
        echo view('users/index',$data);
        echo view('common/footer');
    }

    //login admin and user also
    public function login()
    {
        if(session()->get('role') == "admin")
        {
            return redirect()->to(base_url("users"));
        }else if(session()->get('role') == "users")
        {
            return redirect()->to(base_url("tasks"));
        }
        echo view('common/header');
        echo view('login');
        echo view('common/footer');
    }

    //admin create user
    public function register()
    {
        echo view('common/header');
        echo view('users/register');
        echo view('common/footer');
    }

    //store record
    public function loginPost()
    {
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->getUser($email);

        if ($data) {
            $pass = $data['password'];
            if (password_verify($password, $pass)) {
                $this->session->set(['user_id' => $data['id'], 'email' => $data['email'],'role' => $data['role']]);
                if($data['role'] == "admin")
                {
                    return redirect()->to(base_url("users"));
                }else{
                    return redirect()->to(base_url("tasks"));
                }
                
            } else {
                $this->session->setFlashdata('msg', 'Wrong Password');
            }
        } else {
            $this->session->setFlashdata('msg', 'User Email not Found');
        }
        return redirect()->to(base_url("login"));
    }

    
    public function registerPost()
    {
        $model = new UserModel();
        
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
        ];
        $model->save($data);
        return redirect()->to('/users');
    }

    //logout both user and admin
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url("login"));
    }
}

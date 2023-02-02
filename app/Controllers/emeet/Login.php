<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Login extends Controller
{
    
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        
        echo view('log/login');
    }

    public function check()
    {
        $validation = $this->validate([
            
            'email' => 'required',
            'password' => 'required|min_length[5]|max_length[20]',
           
        ]);

        if(!$validation){
            return view('regis/login',['validation' => $this->validator]);
        }
        else{
            
            $session = session();
            
            $model = new \App\Models\userModel();
            
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $data = $model->where('email',$email)->first();
            
            if($data){
                $pass = $data['password'];
                $verify_password = password_verify($password,$pass);
                if($verify_password){
                    
                    $ses_data = [
                        'user_id' => $data['user_id'],
                        'firstname' => $data['firstname'],
                        'email' => $data['email'],
                        'logged_in' => TRUE

                    ];
                    $session->set($ses_data);
                    return view('dashboard');
                }
                else {
                    $session->setFlashdata('msg', 'Wrong password');
                    return redirect()->to('/login');
                }
            }else {
                $session->setFlashdata('msg', 'Email not found');
                return redirect()->to('/login');
            }
        }
    }
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
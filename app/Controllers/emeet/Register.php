<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        echo view('regis/register');
    }


    public function save()
    {
        $validation = $this->validate([
            'firstname' => 'required|min_length[3]',
            'lastname' => 'required|min_length[3]',
            'id_card' => 'required|max_length[13]',
            'birth' => 'required',
            'email' => 'required|min_length[3]|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[5]|max_length[20]',
            'repassword' => 'matches[password]',
            'phone' => 'required|max_length[10]',
        ]);

        if(!$validation){
            return view('regis/register',['validation' => $this->validator]);
        }
        else{
           
            $firstname = $this->request->getPost('firstname');
            $lastname = $this->request->getPost('lastname');
            $id_card = $this->request->getPost('id_card');
            $birth = $this->request->getPost('birth');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $phone = $this->request->getPost('phone');
            $role = "member";
            $file = $this->request->getFile('image');
            if($file->isValid() && ! $file->hasMoved())
            {
                $imageName = $file->getRandomName();
                $file->move('uploads/',$imageName);
            }

            $value = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'id_card' => $id_card,
                'birth' => $birth,
                'email' => $email,
                'password' => password_hash($password,PASSWORD_DEFAULT),
                'phone' => $phone,
                'role' => $role,
                'image' => $imageName,
            ];

            $userModel = new \App\Models\userModel();
            $userModel->insert($value);
            return redirect()->to('login');
        }
        
    }

    
}

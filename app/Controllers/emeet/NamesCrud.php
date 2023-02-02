<?php namespace App\Controllers;
use App\Models\userModel;
use CodeIgniter\Controller;

class NamesCrud extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        $NameModel = new UserModel();
        $data['user'] = $NameModel->orderBy('user_id','DESC')->findAll();
        return view('namelist',$data);
        
    }
    public function singleUser($id)
    {
        $NameModel = new UserModel();
        $data['user_obj'] = $NameModel->where('user_id',$id)->first();
        return view('editname',$data);
    }

    public function edit($id)
    {
        $NameModel = new UserModel();
        $file = $this->request->getFile('image');
            if($file->isValid() && ! $file->hasMoved())
            {
                $imageName = $file->getRandomName();
                $file->move('uploads/',$imageName);
            }
        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'image' => $imageName,
        ];
        $NameModel->update($id,$data);
        return redirect()->to(base_url('namelist'));
    }

    public function delete($id = null)
    {
        $NameModel = new UserModel();
        $data['user'] = $NameModel->where('user_id',$id)->delete($id);
        return redirect()->to(base_url('namelist'));
    }


}
?>
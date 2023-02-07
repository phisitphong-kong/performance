<?php namespace App\Controllers;
use App\Models\TestLocalTable;
use CodeIgniter\Controller;

class TestLocal extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        return view('test');
    }
    public function testinsert()
    {
        echo $this->request->getPost('amphoe');
        $data = [
            'district' => $this->request->getPost('district'),
            'amphoe' => $this->request->getPost('amphoe'),
            'province' => $this->request->getPost('province'),
            'zipcode' => $this->request->getPost('zipcode'),
        ];
        $tabletest = new TestLocalTable();
        $tabletest->insert($data);   
        return redirect()->to(base_url('TestLocal'));
    }
    

}
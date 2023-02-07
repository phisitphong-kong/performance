<?php namespace App\Controllers;
use App\Models\TestLocalTable;
use CodeIgniter\Controller;

class Test extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        $data['date'] = $this->request->getPost('date');
        echo view('testdate',$data);
    }
}
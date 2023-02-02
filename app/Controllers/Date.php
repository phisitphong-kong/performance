<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Date extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        return view('testdate');
    }
    public function test()
    {
        echo $this->request->getPost('date');
    }

}
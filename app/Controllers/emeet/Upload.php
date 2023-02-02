<?php namespace App\Controllers;
use App\Models\uploadPdf;
use CodeIgniter\Controller;

class Upload extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        return view('uploadpdf');
    }
    public function upload_pdf()
    {   
        
        $table = new Uploadpdf();
        
        $file = $this->request->getFile('name_pdf');
        echo $file;
        //     if($file->isValid() && ! $file->hasMoved())
        //     {
        //         $file->move('view_pdf/');
        //     }
        // $data = [
            
        //     'name_pdf' => $file,
        // ];
        // $table->save($data);
        // return redirect()->to(base_url('upload'));
    }
}
<?php namespace App\Controllers;
use App\Models\MarketingTable;
use CodeIgniter\Controller;

class Marketing extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        return view('marketing');
    }
    public function mar_show()
    {   
        $session = \Config\Services::session();
        $NameModel = new MarketingTable();
        $table_r = new \App\Models\RevenueTable();
        
        $data['per'] = $session->get('per');

        $e = $table_r->select('sum(possible_re) as poss')->first();
        $data['possible'] = $e['poss'];
        
        $data['mar'] = $NameModel->orderBy('id_mar','ASC')->findAll();

        $am = $NameModel->select('sum(amount_mar) as am')->first();
        $data['amount'] = $am['am'];
       
        return view('marketshow',$data);
        
    }

    public function calper()
    {
        $session = \Config\Services::session();
        $per = $this->request->getPost('per');
        $session->set('per',$per);
        return redirect()->to(base_url('marketshow'));
    }
   
    public function cal()
    {
       
        
        $main_arr=array();
        $get = $this->request->getPost();
        
        for($i = 0;$i<2;$i++){
        
        $data = [
            'name_mar' => $get['name_mar'][$i],
            'amount_mar' => $get['amount_mar'][$i],
            
        ];
        $main_arr[]=$data;
        }
        $table_mar = new MarketingTable();
        $table_mar->insertBatch($main_arr);
        
        return redirect()->to(base_url('marketshow'));
    }
}
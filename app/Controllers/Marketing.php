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

        $e = $table_r->select('sum(goal_re) as go')->first();
        $data['go'] = $e['go'];
        
        $data['mar'] = $NameModel->orderBy('id_mar','ASC')->findAll();

        $am = $NameModel->select('sum(amount_mar) as am')->first();
        $data['amount'] = $am['am'];
       
        return view('market/marketshow',$data);
        
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
        
        for($i = 0;$i<count($get['name_mar']);$i++){
            $show = strtotime($get['date_mar'][$i]);
        $data = [
            'date_mar' => date('Y-m-d',$show),
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
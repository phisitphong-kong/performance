<?php namespace App\Controllers;
use App\Models\ServiceTable;
use CodeIgniter\Controller;

class Service extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {   
        $NameModel = new ServiceTable();
        $data['ser'] = $NameModel->select('DATE_FORMAT(date_ser,"%M %Y") as dateser,id_ser,order_ser,goal_ser,possible_ser,profitloss_ser')->orderBy('id_ser','ASC')->findAll();
       
        $go = $NameModel->select('sum(goal_ser) as goalser')->first();
        $data['go_ser'] = $go['goalser'];

        $po = $NameModel->select('sum(possible_ser) as possser')->first();
        $data['possible_ser'] = $po['possser'];

        $pr = $NameModel->select('sum(profitloss_ser) as proser')->first();
        $data['profit_ser'] = $pr['proser'];
        
        return view('service/service',$data);
    }
    public function cal()
    {   
        $main_arr=array();
        $get = $this->request->getPost();
        
        for($i = 0;$i<count($get['order_ser']);$i++){
        $profit = $get['possible_ser'][$i] - $get['goal_ser'][$i];
        $show = strtotime($get['date_ser'][$i]);
        $data = [
            'date_ser' => date('Y-m-d',$show),
            'order_ser' => $get['order_ser'][$i],
            'goal_ser' => $get['goal_ser'][$i],
            'possible_ser' => $get['possible_ser'][$i],
            'profitloss_ser' => $profit,
        ];
        
        $main_arr[]=$data;
        
        }
        
        $servicetable = new ServiceTable();
        $servicetable->insertBatch($main_arr);
        return redirect()->to(base_url('service'));
    }
    public function del_ser($id)
    {
        $NameModel = new ServiceTable();
        $NameModel->where('id_ser',$id)->delete($id);
        return redirect()->to(base_url('service'));
    }
}
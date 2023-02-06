<?php namespace App\Controllers;
use App\Models\CgsTable;
use CodeIgniter\Controller;

class Cgs extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {   
        $NameModel = new CgsTable();
        $data['csg'] = $NameModel->select('DATE_FORMAT(date_cgs,"%M %Y") as datecgs,id_cgs,order_cgs,goal_cgs,possible_cgs,profitloss_cgs')->orderBy('id_cgs','ASC')->findAll();

        $go = $NameModel->select('sum(goal_cgs) as goalcg')->first();
        $data['go_csg'] = $go['goalcg'];

        $po = $NameModel->select('sum(possible_cgs) as posscg')->first();
        $data['possible_cs'] = $po['posscg'];

        $pr = $NameModel->select('sum(profitloss_cgs) as procg')->first();
        $data['profit_cs'] = $pr['procg'];
        
        return view('cgs/cgs',$data);
    }
    public function cal()
    {   
        $main_arr=array();
        $get = $this->request->getPost();
        
        for($i = 0;$i<count($get['order_cgs']);$i++){
        $profit = $get['possible_cgs'][$i] - $get['goal_cgs'][$i];
        $show = strtotime($get['date_cgs'][$i]);
        $data = [
            'date_cgs' => date('Y-m-d',$show),
            'order_cgs' => $get['order_cgs'][$i],
            'goal_cgs' => $get['goal_cgs'][$i],
            'possible_cgs' => $get['possible_cgs'][$i],
            'profitloss_cgs' => $profit,
        ];
        
        $main_arr[]=$data;
        
        }
        
        $cgstable = new CgsTable();
        $cgstable->insertBatch($main_arr);
        return redirect()->to(base_url('cgs'));
    }
    public function del_cgs($id)
    {
        $NameModel = new CgsTable();
        $NameModel->where('id_cgs',$id)->delete($id);
        return redirect()->to(base_url('cgs'));
    }
}
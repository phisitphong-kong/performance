<?php namespace App\Controllers;
use App\Models\RevenueTable;
use CodeIgniter\Controller;

class Revenue extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        $NameModel = new RevenueTable();
        $data['re'] = $NameModel->select('DATE_FORMAT(dateadd_re,"%M %Y") as dateadd,id_re,order_re,goal_re,possible_re,profitloss_re')->orderBy('id_re','ASC')->findAll();

        $go = $NameModel->select('sum(goal_re) as goal')->first();
        $data['re_goal'] = $go['goal'];

        $po = $NameModel->select('sum(possible_re) as poss')->first();
        $data['possible'] = $po['poss'];

        $pr = $NameModel->select('sum(profitloss_re) as pro')->first();
        $data['profit'] = $pr['pro'];
        return view('revenue/revenue',$data);
    }
    public function cal()
    {   
        
        $main_arr=array();
        $get = $this->request->getPost();
        for($i = 0;$i<count($get['order_re']);$i++){
        $profit = $get['possible_re'][$i] - $get['goal_re'][$i];
        $showdate = strtotime($get['dateadd_re'][$i]);
        $data = [
            'order_re' => $get['order_re'][$i],
            'goal_re' => $get['goal_re'][$i],
            'possible_re' => $get['possible_re'][$i],
            'profitloss_re' => $profit,
            'dateadd_re' => date('Y-m-d',$showdate),
        ];
        $main_arr[]=$data;
        }
        
        $table_em = new RevenueTable();
        $table_em->insertBatch($main_arr);
        return redirect()->to(base_url('revenue'));
    }
    public function delete_re($id)
    {
        $NameModel = new RevenueTable();
        $NameModel->where('id_re',$id)->delete($id);
        return redirect()->to(base_url('revenue'));
    }
}
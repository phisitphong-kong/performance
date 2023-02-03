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
        $data['re'] = $NameModel->orderBy('id_re','ASC')->findAll();

        $go = $NameModel->select('sum(goal_re) as goal')->first();
        $data['re_goal'] = $go['goal'];

        $po = $NameModel->select('sum(possible_re) as poss')->first();
        $data['possible'] = $po['poss'];

        $pr = $NameModel->select('sum(profitloss_re) as pro')->first();
        $data['profit'] = $pr['pro'];
        return view('revenue',$data);
    }
    public function re_show()
    {   
        $NameModel = new RevenueTable();
        $data['re'] = $NameModel->orderBy('id_re','ASC')->findAll();

        $e = $NameModel->select('sum(goal_re) as goal')->first();
        $data['re_goal'] = $e['goal'];

        $e = $NameModel->select('sum(possible_re) as poss')->first();
        $data['possible'] = $e['poss'];

        $e = $NameModel->select('sum(profitloss_re) as pro')->first();
        $data['profit'] = $e['pro'];

        return view('revenshow',$data);
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
        echo 11;
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
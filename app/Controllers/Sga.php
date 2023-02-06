<?php namespace App\Controllers;
use App\Models\SgaTable;
use CodeIgniter\Controller;

class Sga extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {   
        $NameModel = new SgaTable();
        $data['sga'] = $NameModel->select('DATE_FORMAT(date_sga,"%M %Y") as datesga,id_sga,order_sga,goal_sga,possible_sga,profitloss_sga')->orderBy('id_sga','ASC')->findAll();
       
        $go = $NameModel->select('sum(goal_sga) as goalsga')->first();
        $data['go_sga'] = $go['goalsga'];

        $po = $NameModel->select('sum(possible_sga) as posssga')->first();
        $data['possible_sga'] = $po['posssga'];

        $pr = $NameModel->select('sum(profitloss_sga) as prosga')->first();
        $data['profit_sga'] = $pr['prosga'];
        

        //เรียกจากตารางอื่น
        $tableemp = new \App\Models\Employee();
        $update = $tableemp->select('sum(salary_emp) as total')->first();
        $to = [
            'goal_sga' => $update['total'],
        ];
        $up = $NameModel->select('id_sga')->like('order_sga','เงินเดือนพนักงาน')->first();
        $NameModel->update($up['id_sga'],$to);


        $update = $tableemp->select('sum(security_emp) as sec')->first();
        $to = [
            'goal_sga' => $update['sec'],
        ];
        $up = $NameModel->select('id_sga')->like('order_sga','ค่าประกันสังคม')->first();
        $NameModel->update($up['id_sga'],$to);


        $tablemarket = new \App\Models\MarketingTable();
        $update = $tablemarket->select('sum(amount_mar) as amount')->first();

        $tablereven = new \App\Models\RevenueTable();
        $a = $tablereven->select('sum(goal_re) as re')->first();

        $session = \Config\Services::session();
        $data['per'] = $session->get('per');

      



        $vatsalary = $a['re']*($data['per']/100);
        $profit = $vatsalary-$update['amount'];
        $to = [
            'goal_sga' => $vatsalary,
            'possible_sga' => $update['amount'],
            'profitloss_sga' => $profit,

        ];
        $up = $NameModel->select('id_sga')->like('order_sga','ค่าการตลาด')->first();
        $NameModel->update($up['id_sga'],$to);

        return view('sga/sga',$data);
    }
    public function cal()
    {   
        $main_arr=array();
        $get = $this->request->getPost();
        for($i = 0;$i<count($get['order_sga']);$i++){
        $toall = $get['possible_sga'][$i] - $get['goal_sga'][$i];
        $show = strtotime($get['date_sga'][$i]);
        $data = [
            'date_sga' => date('Y-m-d',$show),
            'order_sga' => $get['order_sga'][$i],
            'goal_sga' => $get['goal_sga'][$i],
            'possible_sga' => $get['possible_sga'][$i],
            'profitloss_sga' => $toall,
            
        ];
       
        $main_arr[]=$data;
        
        }
        
        $sgatable = new SgaTable();
        $sgatable->insertBatch($main_arr);
        return redirect()->to(base_url('sga'));
    }

    public function updatedata()
    {
        $sgatable = new SgaTable();
        $get = $this->request->getPost();
        for($i = 0;$i<count($get['id_sga']);$i++){
           if($get['id_sga'] == 5)
           { 
            $result = $get['goal_sga'][$i]-$get['possible_sga'][$i];
           }
           else
           {
            $result = $get['possible_sga'][$i]-$get['goal_sga'][$i];
           }

            $up = [
                'goal_sga' => $get['goal_sga'][$i],
                'possible_sga' => $get['possible_sga'][$i],
                'profitloss_sga' => $result,
            ]; 
            $sgatable->update($get['id_sga'][$i],$up);
            
        }
        return redirect()->to(base_url('sga'));
    }

    public function del_sga($id)
    {
        $sgatable = new SgaTable();
        $sgatable->where('id_sga',$id)->delete($id);
        return redirect()->to(base_url('sga'));
    }
}
<?php namespace App\Controllers;
use App\Models\Employee;
use CodeIgniter\Controller;

class Employ extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function searchmonth()
    {
        $session = \Config\Services::session();
        $search = $this->request->getPost('search_month');
        $session->set('searchmonth',$search);
        return redirect()->to(base_url('emp'));
    }

    //view home data employee
    public function index()
    {
        // $session = \Config\Services::session();
        // $search = $session->get('searchmonth');
        $NameModel = new Employee();
       
        // $data['search_m'] = $search;
        
        if($this->request->getPost('research'))
        {  
            
             $research = $this->request->getPost('research');
             $data['em'] = $NameModel->select('id_emp,DATE_FORMAT(datework_emp,"%M %Y") as month,name_emp,department_emp,position_emp,status_emp,salary_emp,security_emp,totalsalary_emp')
             ->like('datework_emp',"%$research%")
             ->orLike('name_emp',"%$research%")
             ->orLike('department_emp',"%$research%")
             ->orLike('position_emp',"%$research%")
             ->orLike('status_emp',"%$research%")
             ->orLike('salary_emp',"%$research%")
             ->orLike('security_emp',"%$research%")
             ->orLike('totalsalary_emp',"%$research%")
             ->orderBy('id_emp','DESC')->findAll();
            
        }
        else if($this->request->getPost('search_month'))
        {
            $search = $this->request->getPost('search_month');
            $data['em'] = $NameModel->select('id_emp,DATE_FORMAT(datework_emp,"%M %Y") as month,name_emp,department_emp,position_emp,status_emp,salary_emp,security_emp,totalsalary_emp')->like('datework_emp',"%$search%")->orderBy('id_emp','DESC')->findAll();
        }
        else
        {
            $data['em'] = $NameModel->select('id_emp,DATE_FORMAT(datework_emp,"%M %Y") as month,name_emp,department_emp,position_emp,status_emp,salary_emp,security_emp,totalsalary_emp')->orderBy('id_emp','DESC')->findAll();
        }

        // echo view('navbar');
        echo view('employee/show_emp',$data);
        // $session->remove('searchmonth');
        
        // $NameModel = new Employee();
        // if($this->request->getPost('search_month'))
        // {
        //     $search = $this->request->getPost('search_month');
        //     $data['em'] = $NameModel->select('id_emp,DATE_FORMAT(datework_emp,"%M %Y") as namo,name_emp,department_emp,position_emp,status_emp,salary_emp')->like('datework_emp',"%$search%")->orderBy('id_emp','DESC')->findAll();
        // }
        // else
        // {
        //     $data['em'] = $NameModel->select('id_emp,DATE_FORMAT(datework_emp,"%M %Y") as namo,name_emp,department_emp,position_emp,status_emp,salary_emp')->orderBy('id_emp','DESC')->findAll();
        // }
        // echo view('navbar');
        // echo view('show_emp',$data);
    }

    //view add employee
    public function add()
    {
        return view('employee/emp');
    }

    //test
    //end test

    //calculate salary
    public function salary()
    {
        $NameModel = new Employee();
        $data['em'] = $NameModel->select('id_emp,DATE_FORMAT(datework_emp,"%M %Y") as month,name_emp,department_emp,position_emp,status_emp,salary_emp,security_emp,totalsalary_emp')->orderBy('id_emp','DESC')->findAll();
        $e = $NameModel->select('sum(salary_emp) as total')->first();
        $data['sum'] = $e['total'];
        $se = $NameModel->select('sum(security_emp) as se')->first();
        $data['security'] = $se['se'];
        $to = $NameModel->select('sum(totalsalary_emp) as tosalary')->first();
        $data['total'] = $to['tosalary'];
       
        return view('salary/salary',$data);
        
    }

    //insert employee
    public function cal()
    {   
        $main_arr=array();
        $get = $this->request->getPost();
        $status = '?????????????????????';
        for($i = 0;$i<count($get['name_emp']);$i++){
        $showdate = strtotime($get['datework_emp'][$i]);
        $data = [
            'name_emp' => $get['name_emp'][$i],
            'department_emp' => $get['department_emp'][$i],
            'position_emp' => $get['position_emp'][$i],
            'status_emp' => $status,
            'datework_emp' => date('Y-m-d',$showdate),
            
        ];
        $main_arr[]=$data;
        }
        
        $table_em = new Employee();
        $table_em->insertBatch($main_arr);

        
        return redirect()->to(base_url('salary'));
    }

    //choose an employee for edit
    public function oneuser($id)
    {
        $edit_user = new Employee();
        $data['user'] = $edit_user->where('id_emp',$id)->first();
        return view('employee/editemploy',$data);
    }
    
    //edit employee one by one
    public function editemp($id)
    {   
        $edit_user = new Employee();
        $data = [
            'name_emp' => $this->request->getPost('name_emp'),
            'dapartment_emp' => $this->request->getPost('dapartment_emp'),
            'position_emp' => $this->request->getPost('position_emp'),
            'status_emp' => $this->request->getPost('status_emp'),
            
        ];
        $edit_user->update($id,$data);
        return redirect()->to(base_url('emp'));
    }

    //update multiple salary 
    public function updatesalary()
    {
        
        $edit_user = new Employee();
        $get = $this->request->getPost();
        
        for($i = 0;$i<count($get['id_emp']);$i++){
        if($get['security_emp'][$i])
        {
            $total = $get['salary_emp'][$i]-$get['security_emp'][$i];
        }
        else
        {
            $total=$get['salary_emp'][$i];
        }
        $data = [
            'salary_emp' => $get['salary_emp'][$i],
            'security_emp' => $get['security_emp'][$i],
            'totalsalary_emp' => $total,
        ];
        
        $edit_user->update($get['id_emp'][$i],$data);
        
        }
        return redirect()->to(base_url('salary'));
        
    }
    

}
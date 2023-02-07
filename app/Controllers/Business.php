<?php namespace App\Controllers;
use App\Models\BusinessTable;
use CodeIgniter\Controller;

class Business extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {   
        return view('add_company');
    }
    public function insert()
    {
        // $get = $this->request->getPost();
        // $add = [$get['add_home'],'อาคาร.',$get['add_loca'],'ซ.',$get['add_alley'],'ถ.',$get['add_road']];
        // $address = implode(" ",$add);
        // $data = [
        //     'name_bu' => $get['name_bu'],
        //     'type_bu' => $get['type_bu'],
        //     'taxplayer_id' => $get['taxplayer_id'],
        //     'address_bu' => $address,
        //     'district' => $get['district'],
        //     'amphoe' => $get['amphoe'],
        //     'province' => $get['province'],
        //     'zipcode' => $get['zipcode'],
        // ];
        // $tableBus = new BusinessTable();
        // $tableBus->insert($data);   
        // return redirect()->to(base_url('Business'));

        $get = $this->request->getPost();
        $add = [$get['add_home'],'อาคาร.',$get['add_loca'],'ซ.',$get['add_alley'],'ถ.',$get['add_road'],'ต.',$get['district'],'อ.',$get['amphoe'],'จ.',$get['province'],$get['zipcode']];
        $address = implode(" ",$add);
        $data = [
            'name_bu' => $get['name_bu'],
            'type_bu' => $get['type_bu'],
            'taxplayer_id' => $get['taxplayer_id'],
            'address_bu' => $address,
        ];
        $tableBus = new BusinessTable();
        $tableBus->insert($data);   
        return redirect()->to(base_url('Business'));
    }
}
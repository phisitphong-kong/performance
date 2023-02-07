<?php namespace App\Models;

use CodeIgniter\Model;

class BusinessTable extends Model
{
    protected $table = 'business';
    protected $primaryKey = 'id_bu';
    protected $allowedFields = ['name_bu','type_bu','taxplayer_id','address_bu'];
}

?>
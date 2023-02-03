<?php namespace App\Models;

use CodeIgniter\Model;

class CgsTable extends Model
{
    protected $table = 'cgs';
    protected $primaryKey = 'id_cgs';
    protected $allowedFields = ['date_cgs','order_cgs','goal_cgs','possible_cgs','profitloss_cgs'];
}

?>
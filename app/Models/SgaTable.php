<?php namespace App\Models;

use CodeIgniter\Model;

class SgaTable extends Model
{
    protected $table = 'sga';
    protected $primaryKey = 'id_sga';
    protected $allowedFields = ['date_sga','order_sga','goal_sga','possible_sga','profitloss_sga'];
}

?>
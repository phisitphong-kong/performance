<?php namespace App\Models;

use CodeIgniter\Model;

class RevenueTable extends Model
{
    protected $table = 'revenue';
    protected $primaryKey = 'id_re';
    protected $allowedFields = ['order_re','goal_re','possible_re','profitloss_re','dateadd_re'];
}

?>
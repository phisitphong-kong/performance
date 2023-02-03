<?php namespace App\Models;

use CodeIgniter\Model;

class ServiceTable extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id_ser';
    protected $allowedFields = ['date_ser','order_ser','goal_ser','possible_ser','profitloss_ser'];
}

?>
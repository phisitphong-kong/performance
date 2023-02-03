<?php namespace App\Models;

use CodeIgniter\Model;

class MarketingTable extends Model
{
    protected $table = 'marketing';
    protected $primaryKey = 'id_mar';
    protected $allowedFields = ['name_mar','amount_mar','date_mar'];
}

?>
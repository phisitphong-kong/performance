<?php namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id_emp';
    protected $allowedFields = ['name_emp','department_emp','position_emp','status_emp','salary_emp','security_emp','totalsalary_emp','datework_emp'];
}

?>
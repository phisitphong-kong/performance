<?php namespace App\Models;

use CodeIgniter\Model;

class UploadPdf extends Model
{
    protected $table = 'upload_pdf';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name_pdf'];
}

?>
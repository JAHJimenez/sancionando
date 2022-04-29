<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    protected  $table = 'reports';
    protected $primarykey = 'id';
    protected $allowedFields = ['date', 'description'];

    
}
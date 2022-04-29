<?php

namespace App\Models;

use CodeIgniter\Model;

class FileModel extends Model
{
    protected  $table = 'report_files';
    protected $primarykey = 'id';
    protected $allowedFields = ['report_id', 'file'];

    
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileDocModel extends Model
{
    public $table = 'file_doc';
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}

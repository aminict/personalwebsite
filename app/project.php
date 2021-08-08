<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'project';
    protected $fillable = [
        'title', 'projectDec',
    ];
    protected $primaryKey = 'id';
}

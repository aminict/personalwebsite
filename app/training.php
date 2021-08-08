<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    protected $table = 'training';
    protected $fillable = [
        'title', 'trainingDec',
    ];
    protected $primaryKey = 'id';
}

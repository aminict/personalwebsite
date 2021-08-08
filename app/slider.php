<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = 'slider';
    protected $fillable = [
        'title', 'message','image','publish',
    ];
    protected $primaryKey = 'id';
}

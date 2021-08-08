<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testemonial extends Model
{
    protected $table = 'testemonial';
    protected $fillable = [
        'title', 'message','image','publish',
    ];
    protected $primaryKey = 'id';
}

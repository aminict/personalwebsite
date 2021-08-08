<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersms extends Model
{
    protected $table = 'usersms';
    protected $fillable = [
        'name', 'email','subject','message',
    ];
    protected $primaryKey = 'id';
}

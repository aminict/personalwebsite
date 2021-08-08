<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'name','profile','email','phone','title','profilesms','image',
    ];
    protected $primaryKey = 'id';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'name',
    ];
    protected $primaryKey = 'id';
   // public $timestamps=false;

  /*  public function posts(){
    	//return $this->hasMany(post::class);
    	 return $this->hasMany('App\post');

    }*/
      public function posts()
        {
           return $this->hasMany('App\post');
        }

    


}

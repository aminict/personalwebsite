<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'category_id','user_id', 'title','description','image',
    ];
    protected $primaryKey = 'id';
    //public $timestamps=false;

  /*   public function category(){
    	//return $this->belongsTo(category::class);
    	return $this->hasOne('App\category','category_id','id');
    }*/
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
      public function category()
    {
    	return $this->belongsTo('App\category');
    }
    
   
}

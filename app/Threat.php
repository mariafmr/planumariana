<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Threat extends Model
{
    //protected $fillable=['title','subtitle','content','content_long','user_id'];
  
    public function user(){
      
        return $this->belongsTo(User::class, 'user_id');
       
    }
    public function type(){
      
        return $this->belongsTo(Type::class, 'threat_id');
       
    }
    
    public function images(){
        return $this->morphMany('App\Image','imageable');
    }
    
}

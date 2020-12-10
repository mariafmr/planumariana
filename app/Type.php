<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function threats(){
      
        return $this->hasMany(Threat::class);
       
      }

     public function images(){
        return $this->morphMany('App\Image','imageable');
    }
}

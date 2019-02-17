<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //funzione per relazione user_id con User Model
    //relazione one to one(un Post, un Utente)
    public function user(){
      return $this->belongsTo('App\User');
    }


}

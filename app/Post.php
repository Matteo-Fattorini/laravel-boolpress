<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["user_id","url","title","details"];
    
    public function getUser()
    {
        return $this->belongsTo("App\User","user_id");
    }
}

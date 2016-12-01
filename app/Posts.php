<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'user_id','user_type_id', 'visibility_id', 'post','image','created_at','updated_at'
    ];

    public function user(){
        return $this->belongsTo('User');
    }

}

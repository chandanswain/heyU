<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visibility_status extends Model
{
    protected $table = 'visibility_status';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'visibility_id','name'
    ];
}

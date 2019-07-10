<?php

namespace App\Model;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = Constants::POST_DB;
    protected $fillable =[
        'title','post','user_id'
    ];
    protected $dates = ['deleted_at'];

    protected $hidden = [
        'created_at', 'updated_at','deleted_at'
    ];
}

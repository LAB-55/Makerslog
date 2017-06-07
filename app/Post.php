<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post_master';
    protected $fillable = [
       'p_id',
       'rand_id',
       'u_id',
       'p_content',
       'p_short_desc',
       'p_title',
       'uri',
       'is_latest',
       'delete'
   ];
}
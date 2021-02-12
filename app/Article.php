<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['en_title', 'en_body', 'ar_title', 'ar_body'];

    protected $hidden = ['created_at', 'updated_at'];
}

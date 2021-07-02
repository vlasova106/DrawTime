<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'user_id', 'ref_id', 'image', 'comment', 'img'
    ];
}

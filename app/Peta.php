<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peta extends Model
{
    protected $fillable = [
        'id', 'category', 'title', 'deskripsi', 'img'
    ];
}

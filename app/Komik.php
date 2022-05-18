<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    public function komikPage()
    {
        return $this->hasMany('App\KomikPage', 'komik_id', 'id');
    }
}

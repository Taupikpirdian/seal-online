<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanHardID extends Model
{
    protected $connection = 'mysql_seal_member';
    protected $table = 'BanHardID';
}

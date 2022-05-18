<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    public function groups()
    {
    	return $this->belongsToMany('App\Group', 'group_roles', 'role_id', 'groups_id');
    }

    public function groupRole()
    {
        return $this->hasMany('App\GroupRole','role_id');
    }
}

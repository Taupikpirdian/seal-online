<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
		'name',
    ];

    public function users()
    {
    	return $this->belongsToMany('App\User', 'user_groups', 'group_id', 'user_id');
    }

    public function roles()
    {
    	return $this->belongsToMany('App\Role', 'group_roles', 'group_id', 'role_id');
    }

    public function userGroup()
    {
    	return $this->hasMany('App\UserGroup', 'group_id');
    }

    public function groupRole()
    {
     	return $this->hasMany('App\GroupRole', 'group_id');
    }
}

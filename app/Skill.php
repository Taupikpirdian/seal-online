<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function levels()
    {
        return $this->hasMany('App\SkillLevel', 'skill_id', 'id')->orderBy('lv', 'asc');
    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Messages\MailMessage;
use App\Notifications\VerifyUserNotification;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userGroup()
    {
        return $this->hasMany('App\UserGroup','user_id');
    }
    
    public function groups()
    {
      return $this->belongsToMany('App\Group', 'user_groups', 'user_id', 'group_id');
    }
    
    public function hasAnyRole($role)
    {
      if($this->groups()->join('group_roles', 'groups.id', '=', 'group_roles.group_id')->join('roles', 'roles.id', '=', 'group_roles.role_id')->where('roles.name', $role)->first()){
        return true;
      }else{
        return false;
      }
    }
    
    public function sendEmailVerificationNotifications($random_password)
    {
      $this->notify(new VerifyUserNotification($random_password));
    }
    
    public function student()
    {
      return $this->belongsTo('App\Student', 'id', 'user_id');
    }

    public function parents()
    {
      return $this->belongsTo('App\Parents');
    }
}

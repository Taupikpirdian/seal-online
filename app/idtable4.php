<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Auth\Events\Attempting;


class idtable4 extends Model
{
    protected $primaryKey = 'id'; // or null

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email', 'passwd', 'reg_date', 'update_date', 'game_block', 'trueId', 'birthday'  
    ];
    
    protected $connection = 'mysql_seal_member';
    protected $table = 'idtable4';

    const UPDATED_AT = 'update_date';
    const CREATED_AT = null;

    public function getAuthPassword()
    {
        return $this->passwd;
    }

     /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password'];

        return $this->hasher->check($plain, $user->getAuthPassword());
    }
}

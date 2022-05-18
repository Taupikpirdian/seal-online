<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\EloquentUserProvider as UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class UserSealProvider extends UserProvider 
{
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password'];
        
        return $this->check($this->mysql_old_password($plain), $user->getAuthPassword());
    }
    
    public function check($plain, $hashed) 
	{
	    if ($plain == $hashed) {
            return true;
        }else{
            return false;
        }
    }
    
    public function mysql_old_password($password) 
	{
	    if ($password == '') {
	        return '';
	    }
	    $nr = 1345345333;
	    $add = 7;
	    $nr2 = 0x12345671;
	    foreach(str_split($password) as $c) {
	        if ($c == ' ' or $c == "\t") {
	            continue;
	        }
	        $tmp = ord($c);
	        $nr ^= ((($nr & 63) + $add) * $tmp) + (($nr << 8) & 0xFFFFFFFF);
	        $nr2 += (($nr2 << 8) & 0xFFFFFFFF) ^ $nr;
	        $add += $tmp;
	    }
	    if ($nr2 > PHP_INT_MAX) {
	        $nr2 += PHP_INT_MAX + 1;
	    }
	    $bit = (1 << 31) -1;
	    return sprintf("%08lx%08lx", $nr & $bit, $nr2 & $bit);
	}
}

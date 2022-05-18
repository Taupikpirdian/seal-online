<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\idtable1;
use App\idtable2;
use App\idtable3;
use App\idtable4;
use App\idtable5;
use App\ContentRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponsel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

Use Alert;
Use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    // use AuthenticatesUsers;

    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        // Alert::error('Error', 'Username yang anda masukkan tidak valid');
        $data = ContentRegister::orderBy('created_at', 'desc')->first();
        return view('auth.register', compact('data'));
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::PROFILE;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // check username validation
        $arr_user_name = str_split($request->user_name, 1);
        if (isset($arr_user_name[0])) {
            $first_letter = $arr_user_name[0];
            if ($arr_user_name[0]!='') {
                $check_valid_user_name = ctype_alpha($arr_user_name[0]);
                $check_valid_user_name_upper = false;
                foreach ($arr_user_name as $key => $check_upper) {
                    $check_valid_user_name_uppers = ctype_upper($check_upper);
                    if ($check_valid_user_name_uppers) {
                        $check_valid_user_name_upper = true;
                    }
                }
                if (!$check_valid_user_name || $check_valid_user_name_upper) {
                    Alert::error('Error', 'Username yang anda masukkan tidak valid');
                    return Redirect::back()->withInput()->with('user_name', 'Username format salah! Format username harus alfabet diawal. Tidak boleh menggunakan tanda baca. Contoh valid: ag12idx, Contoh salah: 12agidx!#@. Tidak boleh mengandung kapital');
                }
                $check_valid_user_name = ctype_alnum($request->user_name);
                if (!$check_valid_user_name) {
                    Alert::error('Error', 'Username yang anda masukkan tidak valid');
                    return Redirect::back()->withInput()->with('user_name', 'Username format salah! Format username harus alfabet diawal. Tidak boleh menggunakan tanda baca. Contoh valid: ag12idx, Contoh salah: 12agidx!#@.');
                }
            } else {
                Alert::error('Error', 'Username tidak boleh kosong!');
                return Redirect::back()->withInput()->with('user_name', 'Username tidak boleh kosong.');
            }
        }

        $check = false;
        $alphabet1 = [
            'start_letter' => 'a',
            'end_letter' => 'd'
        ];
        $alphabet2 = [
            'start_letter' => 'e',
            'end_letter' => 'i'
        ];
        $alphabet3 = [
            'start_letter' => 'j',
            'end_letter' => 'n'
        ];
        $alphabet4 = [
            'start_letter' => 'o',
            'end_letter' => 's'
        ];
        $alphabet5 = [
            'start_letter' => 't',
            'end_letter' => 'z'
        ];

        $num_table = 0;
        do {
            $num_table = $num_table+1;
            $check = checkRangeAlphabet(${'alphabet'.($num_table)}['start_letter'], ${'alphabet'.($num_table)}['end_letter'], $first_letter);
        } while ($check == false);
        
        $this->validator($request->all(), $num_table)->validate();        
        
        event(new Registered($user = $this->create($request->all(), $num_table)));
        
        if (Auth::guard('idtable'.$num_table)->attempt(['id' => $request->user_name, 'password' => $request->password])) {
            $model = 'App\idtable'.$num_table;
            $user = $model::find($request->user_name);
            // $user->char_name = $request->name;
            // $user->save();
            $details = Auth::guard('idtable'.$num_table)->login($user);
            // return $this->sendLoginResponse($request);
            return $this->registered($request, $user)
                    ?: redirect($this->redirectPath());
        }else{
            Alert::error('Error', 'Username / Password salah!');
            return Redirect::back()->withInput()->with('user_name', 'Username / Password salah!');
        }
    }

    /**
     * @param $credentials
     *
     * @return bool
     */
    private function attempt($credentials)
    {
        if ( ! isset( $credentials['password'] ) or ! isset( $credentials['email'] )) {
            return false;
        }

        $user = User::whereEmail($credentials['email'])
                    ->wherePassword(md5($credentials['password']))
                    ->first();

        if ($user) {
            Auth::login($user);
        }

        return $user;
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data, $num_table)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255', 'unique:mysql_seal_member.idtable'.$num_table.',id'],
            'password' => ['required', 'string', 'min:6', 'max:14', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data, $num_table)
    {
        $gameblock = "0000-00-00 00:00:00";
        $updatedate = date('Y-m-d H:i:s');
        $reg_date = date('Y-m-d H:i:s');
        $pass = $this->mysql_old_password($data['password']);
        $model = 'App\idtable'.$num_table;

        return $model::create([
            'id' => $data['user_name'],
            'email' => $data['email'],
            'passwd' => $pass,
            'reg_date' => $reg_date,
            'update_date' => $updatedate,
            'game_block' => $gameblock,
            'trueId' => $data['pin'],
            'birthday' => $data['birthday']
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponsel;
use Illuminate\Support\Facades\Redirect;
use App\pc;
use Auth;
use Alert;
use DB;

class AccountController extends Controller
{
    use AuthenticatesUsers;

    public function profile(Request $request)
    {
        $user  = Auth::guard(getGuard())->user();

        if (!$user) {
            Alert::error('401', 'Anda tidak dapat mengakses halaman ini!');
            return Redirect::to('/');
        }

        $user_onlines = pc::where('play_flag','>',0)->get();
        $count_user_onlines = $user_onlines->count();

        // count cegel
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM store WHERE negel > 0)+ (SELECT SUM(segel) FROM guildstore WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM guildstore WHERE negel > 0) AS 'total' FROM pc WHERE money > 0
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        $connection = "mysql_seal_gdb";
        $sql = "
            SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        ";
        $result_sql = DB::connection($connection)->select(DB::raw($sql));
        $cegel_format = number_format($result_sql['0']->total);
        $cegel = str_replace(",",".",$cegel_format);

        // player
        $user_onlines = pc::where('play_flag','>',0)->get();
        $count_user_onlines = $user_onlines->count();

        // count cegel
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM store WHERE negel > 0)+ (SELECT SUM(segel) FROM guildstore WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM guildstore WHERE negel > 0) AS 'total' FROM pc WHERE money > 0
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        $connection = "mysql_seal_gdb";
        $sql = "
            SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        ";
        $result_sql = DB::connection($connection)->select(DB::raw($sql));
        $cegel_format = number_format($result_sql['0']->total);
        $cegel = str_replace(",",".",$cegel_format);

        // groupBy Dari terbesar cegel
        $rank_cegels = pc::select(DB::raw('
            pc.char_name,
            pc.job,
            pc.money,
            store.segel,
            (pc.money+store.segel) as total
        '))->leftjoin('store', 'pc.user_id', '=', 'store.user_id')
           ->orderBy('total', 'desc')
           ->get();


        foreach($rank_cegels as $rank_cegel){
            // when segel null
            if($rank_cegel->segel == null){
                $rank_cegel->total = $rank_cegel->money;
            }
            // job title
            if($rank_cegel->job == 0){
                $rank_cegel->title_job = "Beginner";
            }elseif($rank_cegel->job == 1){
                $rank_cegel->title_job = "Warrior";
            }elseif($rank_cegel->job == 2){
                $rank_cegel->title_job = "Knight";
            }elseif($rank_cegel->job == 3){
                $rank_cegel->title_job = "Jester";
            }elseif($rank_cegel->job == 4){
                $rank_cegel->title_job = "Mage";
            }elseif($rank_cegel->job == 5){
                $rank_cegel->title_job = "Priest";
            }elseif($rank_cegel->job == 6){
                $rank_cegel->title_job = "Craftman";
            }elseif($rank_cegel->job == 7){
                $rank_cegel->title_job = "GM";
            }elseif($rank_cegel->job == 8){
                $rank_cegel->title_job = "Vagrants";
            }elseif($rank_cegel->job == 9){
                $rank_cegel->title_job = "Hunter";
            }elseif($rank_cegel->job == 11){
                $rank_cegel->title_job = "Berserker";
            }elseif($rank_cegel->job == 12){
                $rank_cegel->title_job = "Renegerade";
            }elseif($rank_cegel->job == 13){
                $rank_cegel->title_job = "Assassin";
            }elseif($rank_cegel->job == 14){
                $rank_cegel->title_job = "Ice Wizard";
            }elseif($rank_cegel->job == 15){
                $rank_cegel->title_job = "Templar";
            }elseif($rank_cegel->job == 16){
                $rank_cegel->title_job = "Demolisionist";
            }elseif($rank_cegel->job == 19){
                $rank_cegel->title_job = "Archer";
            }elseif($rank_cegel->job == 21){
                $rank_cegel->title_job = "SwordMaster";
            }elseif($rank_cegel->job == 22){
                $rank_cegel->title_job = "Defender";
            }elseif($rank_cegel->job == 23){
                $rank_cegel->title_job = "Gambler";
            }elseif($rank_cegel->job == 24){
                $rank_cegel->title_job = "Fire Wizard";
            }elseif($rank_cegel->job == 25){
                $rank_cegel->title_job = "Apostle";
            }elseif($rank_cegel->job == 26){
                $rank_cegel->title_job = "Artisan";
            }elseif($rank_cegel->job == 29){
                $rank_cegel->title_job = "Gunner";
            }else{
                $rank_cegel->title_job = "";
            }
        }

        $rank_cegels = $rank_cegels->sortByDesc('total');
        // paginate rank cegel
        $rank_cegels = $rank_cegels->paginate(100);

        $rank = 0;
        // sort rank
        foreach($rank_cegels as $rank_cegel){
            $rank += 1;
            $rank_cegel->rank = $rank;
            
            $rank_cegel->total = number_format($rank_cegel->total);
            $rank_cegel->total = str_replace(",",".",$rank_cegel->total);
        }
        
        return view('landing.profile', compact('user', 'count_user_onlines', 'cegel', 'rank_cegels'));
    }
    
    public function changePinkCode()
    {
        $user  = Auth::guard(getGuard())->user();
        if (!$user) {
            Alert::error('401', 'Anda tidak dapat mengakses halaman ini!');
            return Redirect::to('/');
        }
        
        return view('change-pin-code');
    }
    
    public function login(Request $request)
    {
        return view('user.login');
    }
    
    public function postLogin(Request $request)
    {
        $num_table = checkIdTable($request->user_name);

        if (!$num_table) {
            Alert::error('Error', 'Username tidak valid');
            return Redirect::back()->withInput()->with('user_name', 'Username format salah! Format username harus alfabet diawal. Tidak boleh menggunakan tanda baca. Contoh valid: ag12idx, Contoh salah: 12agidx!#@');
        }
        
        if (Auth::guard('idtable'.$num_table)->attempt(['id' => $request->user_name, 'password' => $request->password])) {
            $model = 'App\idtable'.$num_table;
            $user = $model::find($request->user_name);
            $details = Auth::guard('idtable'.$num_table)->login($user);
            return $this->sendLoginResponse($request);
        }else{
            Alert::error('Error', 'Username / Password salah!');
            return Redirect::back()->withInput()->with('user_name', 'Username / Password salah!');
        }
    }
    
    public function postChangePassword(Request $request)
    {
        $user  = Auth::guard(getGuard())->user();
        
        if (!$user) {
            // Alert::error('401', 'Anda tidak dapat mengakses halaman ini!');
            return Redirect::to('/');
        }
        if ($request->pin != $user->trueId) {
            // Alert::error('Gagal!', 'Pin yang anda masukkan salah!');
            return Redirect::back()->with(['error' => 'Pin yang anda masukkan salah!']);
        }
        if ($this->mysql_old_password($request->old_pwd) != $user->passwd) {
            // Alert::error('Gagal!', 'Password lama salah!');
            return Redirect::back()->with(['error' => 'Password lama salah!']);
        }
        if ($request->as_pwd != $request->as_pwd_repeat) {
            // Alert::error('Gagal!', 'Password konfirmasi tidak cocok!');
            return Redirect::back()->with(['error' => 'Password konfirmasi tidak cocok!']);
        }
        $new_passwd = $this->mysql_old_password($request->as_pwd_repeat);

        $user->passwd = $new_passwd;
        $user->save();

        // Alert::success('Berhasil!', 'Password telah berhasil dirubah!');
        return Redirect::back()->with(['success' => 'Password telah berhasil dirubah!']);
    }

    public function postChangePin(Request $request)
    {
        $user  = Auth::guard(getGuard())->user();
        
        if (!$user) {
            // Alert::error('401', 'Anda tidak dapat mengakses halaman ini!');
            return Redirect::to('/');
        }
        if ($request->old_pin != $user->trueId) {
            // Alert::error('Gagal!', 'Pin lama salah!');
            return Redirect::back()->with(['error' => 'Pin lama salah!']);
        }
        if ($request->new_pin != $request->new_pin_repeat) {
            // Alert::error('Gagal!', 'Pin konfirmasi tidak cocok!');
            return Redirect::back()->with(['error' => 'Pin konfirmasi tidak cocok!']);
        }
        $new_pin = $request->new_pin_repeat;

        $user->trueId = $new_pin;
        $user->save();

        // Alert::success('Berhasil!', 'Pin telah berhasil dirubah!');
        return Redirect::back()->with(['success' => 'Pin telah berhasil dirubah!']);
    }


    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        // $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended(url('/profile'));
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
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
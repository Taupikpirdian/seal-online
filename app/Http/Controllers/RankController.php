<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\msgfriend;
use App\pc;
use App\guildinfo;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;

class RankController extends Controller
{
    public function couple()
    {
        $user_onlines = pc::where('play_flag','>',0)->get();
        $count_user_onlines = $user_onlines->count();

        $connection = "mysql_seal_gdb";
        $sql = "
            SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        ";

        $result_sql = DB::connection($connection)->select(DB::raw($sql));
        $cegel_format = number_format($result_sql['0']->total);
        $cegel = str_replace(",",".",$cegel_format);

        // $msgfriends = msgfriend::where('couple_name', '!=', '')->orderBy('couple_daycnt', 'desc')->limit(100)->get(); // code dulu
        $msgfriends = msgfriend::join('pc', 'msgfriend.char_name', '=', 'pc.char_name')->where('couple_name', '!=', '')->where('job', '!=', 7)->orderBy('couple_daycnt', 'desc')->paginate(100);

        $user  = Auth::guard(getGuard())->user();
        return view('landing.rank.couple', compact('count_user_onlines', 'cegel', 'msgfriends'));
    }

    public function level()
    {
        $user_onlines = pc::where('play_flag','>',0)->get();
        $count_user_onlines = $user_onlines->count();

        $connection = "mysql_seal_gdb";
        $sql = "
            SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        ";

        $result_sql = DB::connection($connection)->select(DB::raw($sql));
        $cegel_format = number_format($result_sql['0']->total);
        $cegel = str_replace(",",".",$cegel_format);

        // $top_kills = pc::where('gw_score_t', '!=', 0)->orderBy('gw_score_t', 'desc')->limit(100)->get(); // code dulu
        $top_kills = pc::where('job', '!=', 7)->orderBy('level', 'desc')->paginate(100);
        $user  = Auth::guard(getGuard())->user();
        return view('landing.rank.level', compact('count_user_onlines', 'cegel', 'top_kills'));
    }

    public function reputasi()
    {
        $user_onlines = pc::where('play_flag','>',0)->get();
        $count_user_onlines = $user_onlines->count();

        $connection = "mysql_seal_gdb";
        $sql = "
            SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        ";

        $result_sql = DB::connection($connection)->select(DB::raw($sql));
        $cegel_format = number_format($result_sql['0']->total);
        $cegel = str_replace(",",".",$cegel_format);

        // $pcs = pc::where('fame', '!=', 0)->orderBy('fame', 'desc')->limit(100)->get(); // code dulu
        $pcs = pc::where('job', '!=', 7)->where('fame', '!=', 0)->orderBy('fame', 'desc')->paginate(100);
        $user  = Auth::guard(getGuard())->user();
        return view('landing.rank.reputasi', compact('count_user_onlines', 'cegel', 'pcs'));
    }
}

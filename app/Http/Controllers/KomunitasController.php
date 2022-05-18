<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\msgfriend;
use App\pc;
use App\Rule;
use App\guildinfo;
use App\Forum;
use App\ScreenShot;
use App\Komik;
use App\EventSeal;
use App\EventSealList;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class KomunitasController extends Controller
{
    public function fansite()
    {
        $forums = Forum::orderBy('created_at', 'desc')->get();
        return view('landing.komunitas.fansite', compact('forums'));
    }

    public function komik()
    {
        $komiks = Komik::orderBy('created_at', 'desc')
            ->with('komikPage')
            ->paginate(25);

        return view('landing.komunitas.komik', compact('komiks'));
    }

    public function guildRank()
    {
        $guild_infos = guildinfo::limit(100)->get();
        foreach ($guild_infos as $key => $guild_info) {
            $guild_info->pointss = (int)$guild_info->gw_win_w*3;
        }
        $guild_infos = $guild_infos->sortByDesc('pointss');
        $user  = Auth::guard(getGuard())->user();

        return view('landing.komunitas.guildRank', compact('guild_infos', 'user'));
    }

    public function screenshot()
    {
        $screen_shots = ScreenShot::orderBy('created_at', 'desc')->paginate(25);
        return view('landing.komunitas.screenshot', compact('screen_shots'));
    }

    public function event(Request $request)
    {
        $slug = $request->slug;
        $event_seals = EventSeal::orderBy('created_at', 'desc')->paginate(25);

        if($slug != null){
            $event_seal  = EventSeal::where('slug', $slug)->orderBy('created_at', 'desc')->first();
            $event_seal_lists = EventSealList::where('event_seal_id', $event_seal->id)->get();
            $flag = 1;
        }else{
            $event_seal = null;
            $event_seal_lists = null;
            $flag = 0;
        }

        return view('landing.komunitas.event', compact('event_seals', 'event_seal_lists', 'event_seal', 'flag'));
    }

    public function rule()
    {
        $rule = Rule::orderBy('created_at', 'desc')->first();
        return view('landing.komunitas.rule', compact('rule'));
    }
}

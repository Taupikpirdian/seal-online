<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Rule;
use App\TopUp;
use App\Download;
use App\Berita;
use App\Forum;
use App\Iklan;
use App\Slider;
use App\Guide;
use App\ContactInfo;
use App\Event;
use App\idtable5;
use App\pc;
use App\HomeButton;
use App\SetupIntro;
use App\Content;
use App\Gallery;
use App\Introduction;
use App\Fitur;
use App\UpdateSeal;
use App\UpdateSealPart;
use App\BackgroundUpdateSeal;
use App\Installation;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        return view('welcome', compact('setup'));
    }

    public function maintenance()
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "up"){
                return Redirect::action('HomeController@home');
            }
        }

        return view('maintenance', compact('setup'));
    }

    public function home()
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        // berita
        $all_datas  = Berita::orderBy('created_at', 'desc')->paginate(10);
        // untuk kebutuhan class css
        foreach($all_datas as $key=>$data){
            if($data->category_id == 1){
                $data->class = "c_berita";
            }elseif($data->category_id == 2){
                $data->class = "c_acara";
            }elseif($data->category_id == 3){
                $data->class = "c_info";
            }elseif($data->category_id == 4){
                $data->class = "c_gameup";
            }
        }
        $beritas    = Berita::orderBy('created_at', 'desc')->where('category_id', 1)->paginate(10);
        $events     = Berita::orderBy('created_at', 'desc')->where('category_id', 2)->paginate(10);
        $infos      = Berita::orderBy('created_at', 'desc')->where('category_id', 3)->paginate(10);
        $game_ups   = Berita::orderBy('created_at', 'desc')->where('category_id', 4)->paginate(10);
        // gallery
        $galleries  = Gallery::orderBy('created_at', 'desc')->limit(5)->get();

        $forums = Forum::orderBy('created_at', 'desc')->get();
        $sliders = Slider::orderBy('created_at', 'desc')->limit(5)->get();
        $user_onlines = pc::where('play_flag','>',0)->get();
        $count_user_onlines = $user_onlines->count();
        $top_kills = pc::where('gw_score_t', '!=', 0)->orderBy('gw_score_t', 'desc')->limit(10)->get();
        $download = Download::orderBy('created_at', 'desc')->first();
        $user  = Auth::guard(getGuard())->user();

        // count cegel
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM store WHERE negel > 0)+ (SELECT SUM(segel) FROM guildstore WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM guildstore WHERE negel > 0) AS 'total' FROM pc WHERE money > 0
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        $connection = "mysql_seal_gdb";
        // $sql = "
        //     SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        // ";

        // $sql = "
        //     SELECT SUM(money)+ 
        //     (SELECT SUM(segel) FROM store WHERE segel >= 0)+
        //     (SELECT SUM(negel*100000000) FROM store WHERE negel >= 0)+
        //     (SELECT SUM(segel) FROM guildstore WHERE segel >= 0)+
        //     (SELECT SUM(negel*100000000) FROM guildstore WHERE negel >= 0) AS 'total'
        //     FROM pc WHERE money >= 0;
        // ";

        $sql = "
            SELECT IFNULL(SUM(money),0)+ 
            (SELECT IFNULL(SUM(segel),0) FROM store WHERE segel > 0)+
            (SELECT IFNULL(SUM(negel*100000000),0) FROM store WHERE negel > 0)+
            (SELECT IFNULL(SUM(segel),0) FROM guildstore WHERE segel > 0)+
            (SELECT IFNULL(SUM(negel*100000000),0) FROM guildstore WHERE negel > 0)+
            (SELECT IFNULL(SUM(Item_money),0) FROM mailbox WHERE ItemGroup = 0 AND Del_date IS NULL) AS 'total'
            FROM pc WHERE money > 0;
        ";

        $result_sql = DB::connection($connection)->select(DB::raw($sql));
        $cegel_format = number_format($result_sql['0']->total);
        $cegel = str_replace(",",".",$cegel_format);

        // groupBy Dari terbesar cegel
        $rank_cegels = pc::select(['pc.money'])->orderBy('money', 'desc')->get();

        return view('home', compact(
            'user', 
            'top_kills', 
            'count_user_onlines', 
            'forums', 
            'sliders', 
            'beritas', 
            'events', 
            'download', 
            'infos', 
            'game_ups',
            'all_datas',
            'galleries',
            'cegel',
            'rank_cegels'
        ));
    }

    public function rankingList()
    {
        return view('ranking');
    } 

    public function aturanGame()
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $rule = Rule::orderBy('created_at', 'desc')->first();
        $user  = Auth::guard(getGuard())->user();
        return view('aturan', compact('rule', 'user'));
    }

    public function aturanGame2()
    {
        $rule = Rule::orderBy('created_at', 'desc')->first();
        return view('aturan2', compact('rule'));
    }
    
    public function forumGame()
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $forums = Forum::orderBy('created_at', 'desc')->get();
        $user  = Auth::guard(getGuard())->user();
        return view('forum', compact('forums', 'user'));
    }

    public function forumGame2()
    {
        $forums = Forum::orderBy('created_at', 'desc')->get();
        return view('forum2', compact('forums'));
    }
    
    public function guideInformation()
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $guides = Guide::orderBy('created_at', 'desc')->get();
        $user  = Auth::guard(getGuard())->user();
        return view('guidegame', compact('guides', 'user'));
    }

    public function guideInformation2()
    {
        $guides = Guide::orderBy('created_at', 'desc')->get();
        return view('guidegame-new', compact('guides'));
    }

    public function downloadGame()
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $download = Download::orderBy('created_at', 'desc')->first();
        $user  = Auth::guard(getGuard())->user();
        return view('download-game', compact('download', 'user'));
    }

    public function topUp()
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $top_up = TopUp::orderBy('created_at', 'desc')->first();
        $user  = Auth::guard(getGuard())->user();
        return view('top-up', compact('top_up', 'user'));
    } 

    public function topUp2()
    {
        $top_up = TopUp::orderBy('created_at', 'desc')->first();
        return view('top-up2', compact('top_up'));
    } 

    public function accSetings()
    {
        return view('acc-setting');
    }

    public function changeEmail()
    {
        return view('change-email');
    }

    public function detailBerita($slug)
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $berita = Berita::where('slug', $slug)->first();
        $user  = Auth::guard(getGuard())->user();
        return view('landing.detail.berita', compact('berita', 'user'));
    }

    public function detailContent($slug)
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $content = Content::where('slug', $slug)->first();
        $user  = Auth::guard(getGuard())->user();
        return view('detail-content', compact('content', 'user'));
    }

    public function detailBerita2($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('detail-berita2', compact('berita'));
    }

    public function detailEvent($slug)
    {
        // cek web sedang down atau tidak
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $event = Event::where('slug', $slug)->first();
        $user  = Auth::guard(getGuard())->user();
        return view('detail-event', compact('event', 'user'));
    }

    public function detailEvent2($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('detail-event2', compact('event'));
    }


    public function listBerita()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }

        $beritas = Berita::orderBy('created_at', 'desc')->where('category_id', 1)->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        return view('landing.duniaSeal.berita', compact('beritas', 'user'));
    }

    public function listEvent()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $events = Berita::orderBy('created_at', 'desc')->where('category_id', 2)->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        return view('landing.duniaSeal.acara', compact('events', 'user'));
    }

    public function info()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $infos = Berita::orderBy('created_at', 'desc')->where('category_id', 3)->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        return view('landing.duniaSeal.info', compact('infos', 'user'));
    }

    public function gameUpdate()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $game_updates = Berita::orderBy('created_at', 'desc')->where('category_id', 4)->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        return view('landing.duniaSeal.gameUpdate', compact('game_updates', 'user'));
    }

    public function pengenalan()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $intro = Introduction::orderBy('created_at', 'desc')->first();
        $user  = Auth::guard(getGuard())->user();
        return view('landing.duniaSeal.pengenalan', compact('intro', 'user'));
    }

    public function fitur()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $fiturs = Fitur::orderBy('created_at', 'desc')->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        return view('landing.duniaSeal.feature', compact('fiturs', 'user'));
    }

    public function updateSeal()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $update_seals = UpdateSeal::orderBy('created_at', 'desc')->get();
        $user  = Auth::guard(getGuard())->user();
        return view('landing.duniaSeal.updateSeal', compact('update_seals', 'user'));
    }

    public function carnivalCity()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->where('sub_category', 6)->paginate(25);
        $profesi_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->where('sub_category', 0)->paginate(25);
        $peta_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->where('sub_category', 1)->paginate(25);
        $guardian_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->where('sub_category', 2)->paginate(25);
        $pvp_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->where('sub_category', 3)->paginate(25);
        $item_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->where('sub_category', 4)->paginate(25);
        $skill_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->where('sub_category', 5)->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        $background = BackgroundUpdateSeal::orderBy('created_at', 'desc')->where('category', 0)->first();
        return view('landing.duniaSeal.carnivalCity', compact('datas', 'user', 'profesi_datas', 'peta_datas', 'guardian_datas', 'pvp_datas', 'item_datas', 'skill_datas', 'background'));
    }

    public function guildWars()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 1)->where('sub_category', 6)->paginate(25);
        $guild_wars = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 1)->where('sub_category', 0)->paginate(25);
        $peta_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 1)->where('sub_category', 1)->paginate(25);
        $monsters = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 1)->where('sub_category', 2)->paginate(25);
        $armors = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 1)->where('sub_category', 3)->paginate(25);
        $quests = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 1)->where('sub_category', 4)->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        $background = BackgroundUpdateSeal::orderBy('created_at', 'desc')->where('category', 1)->first();
        return view('landing.duniaSeal.guildWars', compact('datas', 'user', 'guild_wars', 'peta_datas', 'monsters', 'armors', 'quests', 'background'));
    }

    public function service()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 2)->where('sub_category', 6)->paginate(25);
        $peta_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 2)->where('sub_category', 0)->paginate(25);
        $monsters = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 2)->where('sub_category', 1)->paginate(25);
        $armors = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 2)->where('sub_category', 2)->paginate(25);
        $npc_datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 2)->where('sub_category', 3)->paginate(25);
        $status_items = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 2)->where('sub_category', 4)->paginate(25);
        $user  = Auth::guard(getGuard())->user();
        $background = BackgroundUpdateSeal::orderBy('created_at', 'desc')->where('category', 2)->first();
        return view('landing.duniaSeal.service', compact('datas', 'user', 'peta_datas', 'monsters', 'armors', 'npc_datas', 'status_items', 'status_items', 'background'));
    }

    public function beliCoin()
    {
        $top_up = TopUp::orderBy('created_at', 'desc')->first();
        return view('landing.koin.index', compact('top_up'));
    }

    public function playerPrestige()
    {
        $user_onlines = pc::where('play_flag','>',0)->get();
        $count_user_onlines = $user_onlines->count();

        // count cegel
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM store WHERE negel > 0)+ (SELECT SUM(segel) FROM guildstore WHERE segel > 0)+ (SELECT SUM(negel*100000000) FROM guildstore WHERE negel > 0) AS 'total' FROM pc WHERE money > 0
        // SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;

        $connection = "mysql_seal_gdb";
        // $sql = "
        //     SELECT SUM(money)+ (SELECT SUM(segel) FROM store WHERE segel > 0) AS 'total'FROM pc WHERE money > 0;
        // ";

        $sql = "
            SELECT SUM(money)+ 
            (SELECT SUM(segel) FROM store WHERE segel >= 0)+
            (SELECT SUM(negel*100000000) FROM store WHERE negel >= 0)+
            (SELECT SUM(segel) FROM guildstore WHERE segel >= 0)+
            (SELECT SUM(negel*100000000) FROM guildstore WHERE negel >= 0) AS 'total'
            FROM pc WHERE money >= 0;
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

        $rank = 0;
        // sort rank
        foreach($rank_cegels as $rank_cegel){
            $rank += 1;
            $rank_cegel->rank = $rank;

            // $cegel_format = number_format($result_sql['0']->total);
            // $cegel = str_replace(",",".",$cegel_format);
        }

        dd($rank_cegels);

        return view('landing.Home.playerPrestige', compact('count_user_onlines', 'cegel', 'rank_cegels'));
    }
    
}

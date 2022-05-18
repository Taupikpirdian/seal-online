<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Installation;
use Auth;
use App\SetupIntro;
use App\NonPlayerCharacter;
use App\IntroBale;
use App\MonsterBale;
use App\HindariPenipuan;
use App\IntroHindariPenipuan;
use App\GameMaster;
use App\IntroGameMaster;
use App\Profesi;
use App\Skill;
use App\Peta;
use App\IntroTakeGift;
use App\DatingGift;
use App\Refine;
use App\EmotikonContent;
use App\Pet;
use App\MulaiBermain;
use App\Barang;

class PanduanController extends Controller
{
    public function instalation()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $data = Installation::orderBy('created_at', 'desc')->first();
        $user  = Auth::guard(getGuard())->user();

        return view('landing.panduan.instalation', compact('data', 'user'));
    }

    public function mulaiBermain()
    {
        // intro
        $intro          = MulaiBermain::where('category', 'Intro')->first();

        // client seal
        $notice          = MulaiBermain::where('category', 'Client Seal')->where('sub_category', 'Notice Patch')->first();
        $ubah_pw         = MulaiBermain::where('category', 'Client Seal')->where('sub_category', 'Ubah Pengaturan')->first();
        $login           = MulaiBermain::where('category', 'Client Seal')->where('sub_category', 'Login')->first();

        // karakter
        $new_karakter    = MulaiBermain::where('category', 'Karakter')->where('sub_category', 'Membuat Karakter Baru')->first();
        $profesi         = MulaiBermain::where('category', 'Karakter')->where('sub_category', 'Profesi')->first();
        $npc             = MulaiBermain::where('category', 'Karakter')->where('sub_category', 'NPC')->first();

        // dalam game
        $status         = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Status')->first();
        $skill          = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Skill')->first();
        $naik_lv        = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Naik Level')->first();
        $barang         = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Barang')->first();
        $menu_utama     = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Menu Utama')->first();
        $menu_singkat   = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Menu Singkat')->first();
        $layar_pesan    = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Layar Pesan')->first();
        $option         = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Option')->first();
        $daftar_menu    = MulaiBermain::where('category', 'Dalam Game')->where('sub_category', 'Daftar Menu')->first();

        // Kontrol
        $io             = MulaiBermain::where('category', 'Kontrol')->where('sub_category', 'Mouse dan Keyboard')->first();
        $wrap           = MulaiBermain::where('category', 'Kontrol')->where('sub_category', 'Berpindah dan Wrap')->first();
        $kombo          = MulaiBermain::where('category', 'Kontrol')->where('sub_category', 'Menyerang dan Kombo')->first();
        $t_singkat      = MulaiBermain::where('category', 'Kontrol')->where('sub_category', 'Tombol Singkat')->first();

        // Berteman
        $m_team        = MulaiBermain::where('category', 'Berteman')->where('sub_category', 'Messenger - Team')->first();
        $m_grup        = MulaiBermain::where('category', 'Berteman')->where('sub_category', 'Messenger - Group')->first();
        $komunitas     = MulaiBermain::where('category', 'Berteman')->where('sub_category', 'Komunitas')->first();

        // Lain-lain
        $berbicara     = MulaiBermain::where('category', 'Lain-Lain')->where('sub_category', 'Berbicara')->first();
        $misi          = MulaiBermain::where('category', 'Lain-Lain')->where('sub_category', 'Misi')->first();
        $pot           = MulaiBermain::where('category', 'Lain-Lain')->where('sub_category', 'Memancing Pot-Besar')->first();
        $quit          = MulaiBermain::where('category', 'Lain-Lain')->where('sub_category', 'Quit Menu')->first();

        return view('landing.panduan.mulaiBermain', compact([
            'intro', 
            'notice',
            'ubah_pw',
            'login',
            'new_karakter',
            'profesi',
            'npc',
            'status',
            'skill',
            'naik_lv',
            'barang',
            'menu_utama',
            'menu_singkat',
            'layar_pesan',
            'option',
            'daftar_menu',
            'io',
            'wrap',
            'kombo',
            't_singkat',
            'm_team',
            'm_grup',
            'komunitas',
            'berbicara',
            'misi',
            'pot',
            'quit',
        ]));
    }

    public function peta()
    {
        $petas = Peta::all()->paginate(25);
        return view('landing.panduan.peta', compact('petas'));
    }

    public function npc()
    {
        $datas = NonPlayerCharacter::orderBy('created_at', 'desc')->paginate(25);
        return view('landing.panduan.npc', compact('datas'));
    }

    public function gameMaster()
    {
        $intro_game_master = IntroGameMaster::orderBy('created_at', 'desc')->first();
        $game_masters = GameMaster::orderBy('created_at', 'desc')->paginate(25);
        return view('landing.panduan.gameMaster', compact('intro_game_master', 'game_masters'));
    }

    public function pet()
    {
        $pet_intro   = Pet::orderBy('created_at', 'desc')->where('type', 'intro')->first();
        $pet_seed    = Pet::orderBy('created_at', 'desc')->where('type', 'seed')->first();
        $pet_piya    = Pet::orderBy('created_at', 'desc')->where('type', 'piya')->first();
        $pet_bird    = Pet::orderBy('created_at', 'desc')->where('type', 'bird')->first();
        $pet_heaven  = Pet::orderBy('created_at', 'desc')->where('type', 'heaven')->first();

        return view('landing.panduan.pet', compact('pet_intro', 'pet_seed', 'pet_piya', 'pet_bird', 'pet_heaven'));
    }

    public function pacaran()
    {
        $intro         = IntroTakeGift::where('type', 'intro')->first();
        $take_gift     = IntroTakeGift::where('type', 'take')->first();
        $dating_gifts  = DatingGift::orderBy('created_at', 'asc')->get();
        return view('landing.panduan.pacaran', compact('intro', 'take_gift', 'dating_gifts'));
    }

    public function guildWars()
    {
        return view('landing.panduan.guildWars');
    }

    public function refine()
    {
        $intro         = Refine::where('type', 'intro')->first();
        $refine_risk   = Refine::where('type', 'risk')->first();
        $refine_return = Refine::where('type', 'return')->first();

        return view('landing.panduan.refine', compact('intro', 'refine_risk', 'refine_return'));
    }

    public function bale()
    {
        $bale_monster       = IntroBale::orderBy('created_at', 'desc')->where('type', 0)->first();
        $bos_bale_monster   = IntroBale::orderBy('created_at', 'desc')->where('type', 1)->first();

        // level 1-20
        $level_max_20  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 0)->where('level', '<', 21)->get();

        // level 21-40
        $level_max_40  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 20)->where('level', '<', 41)->get();

        // level 41 - 60
        $level_max_60  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 40)->where('level', '<', 61)->get();

        // level 61-80
        $level_max_80  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 60)->where('level', '<', 81)->get();

        // level 81-100
        $level_max_100  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 80)->where('level', '<', 101)->get();

        // level 101-120
        $level_max_120  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 100)->where('level', '<', 121)->get();

        // level 121-140
        $level_max_140  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 120)->where('level', '<', 141)->get();

        // level 141-160
        $level_max_160  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 140)->where('level', '<', 161)->get();

        // level 161-180
        $level_max_180  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 160)->where('level', '<', 181)->get();

        // level 181-200
        $level_max_200  = MonsterBale::orderBy('level', 'asc')->where('type', 0)->where('level', '>', 180)->where('level', '<', 201)->get();

        // boss
        $boss_bale  = MonsterBale::orderBy('level', 'asc')->where('type', 1)->get();

        return view('landing.panduan.bale', compact([
            'bos_bale_monster', 
            'bale_monster',
            'level_max_20',
            'level_max_40',
            'level_max_60',
            'level_max_80',
            'level_max_100',
            'level_max_120',
            'level_max_140',
            'level_max_160',
            'level_max_180',
            'level_max_200',
            'boss_bale',
        ]));
    }

    public function emotikon()
    {
        $emotikon   = EmotikonContent::orderBy('created_at', 'desc')->first();
        return view('landing.panduan.emotikon', compact('emotikon'));
    }

    public function barang()
    {
        $intro   = Barang::where('category', 'Intro')->first();

        // kepala
        $kepala_beginner    = Barang::where('category', 'Kepala')->where('sub_category', 'Beginner')->first();
        $kepala_warrior     = Barang::where('category', 'Kepala')->where('sub_category', 'Warrior')->first();
        $kepala_knight      = Barang::where('category', 'Kepala')->where('sub_category', 'Knight')->first();
        $kepala_magician    = Barang::where('category', 'Kepala')->where('sub_category', 'Magician')->first();
        $kepala_cleric      = Barang::where('category', 'Kepala')->where('sub_category', 'Cleric')->first();
        $kepala_clown       = Barang::where('category', 'Kepala')->where('sub_category', 'Clown')->first();
        $kepala_craftsman   = Barang::where('category', 'Kepala')->where('sub_category', 'Craftsman')->first();

        // baju
        $baju_beginner    = Barang::where('category', 'Baju')->where('sub_category', 'Beginner')->first();
        $baju_warrior     = Barang::where('category', 'Baju')->where('sub_category', 'Warrior')->first();
        $baju_knight      = Barang::where('category', 'Baju')->where('sub_category', 'Knight')->first();
        $baju_magician    = Barang::where('category', 'Baju')->where('sub_category', 'Magician')->first();
        $baju_cleric      = Barang::where('category', 'Baju')->where('sub_category', 'Cleric')->first();
        $baju_clown       = Barang::where('category', 'Baju')->where('sub_category', 'Clown')->first();
        $baju_craftsman   = Barang::where('category', 'Baju')->where('sub_category', 'Craftsman')->first();

        // baju
        $sepatu_beginner    = Barang::where('category', 'Sepatu')->where('sub_category', 'Beginner')->first();
        $sepatu_warrior     = Barang::where('category', 'Sepatu')->where('sub_category', 'Warrior')->first();
        $sepatu_knight      = Barang::where('category', 'Sepatu')->where('sub_category', 'Knight')->first();
        $sepatu_magician    = Barang::where('category', 'Sepatu')->where('sub_category', 'Magician')->first();
        $sepatu_cleric      = Barang::where('category', 'Sepatu')->where('sub_category', 'Cleric')->first();
        $sepatu_clown       = Barang::where('category', 'Sepatu')->where('sub_category', 'Clown')->first();
        $sepatu_craftsman   = Barang::where('category', 'Sepatu')->where('sub_category', 'Craftsman')->first();

        // perisai
        $perisai_beginner    = Barang::where('category', 'Perisai')->where('sub_category', 'Beginner')->first();
        $perisai_warrior     = Barang::where('category', 'Perisai')->where('sub_category', 'Warrior')->first();
        $perisai_knight      = Barang::where('category', 'Perisai')->where('sub_category', 'Knight')->first();
        $perisai_magician    = Barang::where('category', 'Perisai')->where('sub_category', 'Magician')->first();
        $perisai_cleric      = Barang::where('category', 'Perisai')->where('sub_category', 'Cleric')->first();
        $perisai_clown       = Barang::where('category', 'Perisai')->where('sub_category', 'Clown')->first();
        $perisai_craftsman   = Barang::where('category', 'Perisai')->where('sub_category', 'Craftsman')->first();

        // senjata
        $senjata_beginner    = Barang::where('category', 'Senjata')->where('sub_category', 'Beginner')->first();
        $senjata_warrior     = Barang::where('category', 'Senjata')->where('sub_category', 'Warrior')->first();
        $senjata_knight      = Barang::where('category', 'Senjata')->where('sub_category', 'Knight')->first();
        $senjata_magician    = Barang::where('category', 'Senjata')->where('sub_category', 'Magician')->first();
        $senjata_cleric      = Barang::where('category', 'Senjata')->where('sub_category', 'Cleric')->first();
        $senjata_clown       = Barang::where('category', 'Senjata')->where('sub_category', 'Clown')->first();
        $senjata_craftsman   = Barang::where('category', 'Senjata')->where('sub_category', 'Craftsman')->first();

        // kostum
        $kostum_beginner    = Barang::where('category', 'Kostum')->where('sub_category', 'Beginner')->first();
        $kostum_warrior     = Barang::where('category', 'Kostum')->where('sub_category', 'Warrior')->first();
        $kostum_knight      = Barang::where('category', 'Kostum')->where('sub_category', 'Knight')->first();
        $kostum_magician    = Barang::where('category', 'Kostum')->where('sub_category', 'Magician')->first();
        $kostum_cleric      = Barang::where('category', 'Kostum')->where('sub_category', 'Cleric')->first();
        $kostum_clown       = Barang::where('category', 'Kostum')->where('sub_category', 'Clown')->first();
        $kostum_craftsman   = Barang::where('category', 'Kostum')->where('sub_category', 'Craftsman')->first();

        // aksesoris
        $aksesoris_beginner    = Barang::where('category', 'Aksesoris')->where('sub_category', 'Beginner')->first();
        $aksesoris_warrior     = Barang::where('category', 'Aksesoris')->where('sub_category', 'Warrior')->first();
        $aksesoris_knight      = Barang::where('category', 'Aksesoris')->where('sub_category', 'Knight')->first();
        $aksesoris_magician    = Barang::where('category', 'Aksesoris')->where('sub_category', 'Magician')->first();
        $aksesoris_cleric      = Barang::where('category', 'Aksesoris')->where('sub_category', 'Cleric')->first();
        $aksesoris_clown       = Barang::where('category', 'Aksesoris')->where('sub_category', 'Clown')->first();
        $aksesoris_craftsman   = Barang::where('category', 'Aksesoris')->where('sub_category', 'Craftsman')->first();


        return view('landing.panduan.barang', compact([
            'intro',
            'kepala_beginner',
            'kepala_warrior',
            'kepala_knight',
            'kepala_magician',
            'kepala_cleric',
            'kepala_clown',
            'kepala_craftsman',
            'baju_beginner',
            'baju_warrior',
            'baju_knight',
            'baju_magician',
            'baju_cleric',
            'baju_clown',
            'baju_craftsman',
            'sepatu_beginner',
            'sepatu_warrior',
            'sepatu_knight',
            'sepatu_magician',
            'sepatu_cleric',
            'sepatu_clown',
            'sepatu_craftsman',
            'perisai_beginner',
            'perisai_warrior',
            'perisai_knight',
            'perisai_magician',
            'perisai_cleric',
            'perisai_clown',
            'perisai_craftsman',
            'senjata_beginner',
            'senjata_warrior',
            'senjata_knight',
            'senjata_magician',
            'senjata_cleric',
            'senjata_clown',
            'senjata_craftsman',
            'kostum_beginner',
            'kostum_warrior',
            'kostum_knight',
            'kostum_magician',
            'kostum_cleric',
            'kostum_clown',
            'kostum_craftsman',
            'aksesoris_beginner',
            'aksesoris_warrior',
            'aksesoris_knight',
            'aksesoris_magician',
            'aksesoris_cleric',
            'aksesoris_clown',
            'aksesoris_craftsman',
        ]));
    }

    public function guildwar()
    {
        return view('landing.panduan.guildWars');
    }

    public function profesi()
    {
        $profesis   = Profesi::orderBy('created_at', 'desc')->paginate(25);
        $skills     = Skill::with('levels')->orderBy('created_at', 'desc')->paginate(25);
        return view('landing.panduan.profesi', compact('profesis', 'skills'));
    }

    public function hindariPenipuan()
    {
        $intro_hindari_penipuan = IntroHindariPenipuan::orderBy('created_at', 'desc')->first();
        $hindari_penipuans = HindariPenipuan::orderBy('created_at', 'desc')->paginate(25);
        return view('landing.panduan.hindariPenipuan', compact('intro_hindari_penipuan', 'hindari_penipuans'));
    }
}

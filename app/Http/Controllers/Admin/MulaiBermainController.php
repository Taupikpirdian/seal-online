<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MulaiBermain;
use View;
use Illuminate\Support\Facades\Redirect;

class MulaiBermainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros         = MulaiBermain::where('category', 'Intro')->paginate(25);
        $clients        = MulaiBermain::where('category', 'Client Seal')->paginate(25);
        $karakters      = MulaiBermain::where('category', 'Karakter')->paginate(25);
        $in_games       = MulaiBermain::where('category', 'Dalam Game')->paginate(25);
        $kontrols       = MulaiBermain::where('category', 'Kontrol')->paginate(25);
        $temans         = MulaiBermain::where('category', 'Berteman')->paginate(25);
        $lains          = MulaiBermain::where('category', 'Lain-Lain')->paginate(25);
        return view('admin.mulai-bermain.index', compact('intros', 'clients', 'karakters', 'in_games', 'kontrols', 'temans', 'lains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Intro';
        $data['type']  = 'Intro';
        return View::make('admin.mulai-bermain.create', $data);
    }

    public function createClient()
    {
        $sub_category = array(
            "Notice Patch"      => "Notice Patch",
            "Ubah Pengaturan"   => "Ubah Pengaturan",
            "Login"             => "Login",
        );

        $data['title'] = 'Client Seal';
        $data['type']  = 'Client Seal';
        $data['sub_category'] = $sub_category;
        return View::make('admin.mulai-bermain.create', $data);
    }

    public function createKarakter()
    {
        $sub_category = array(
            "Membuat Karakter Baru" => "Membuat Karakter Baru",
            "Profesi"               => "Profesi",
            "NPC"                   => "NPC",
        );

        $data['title'] = 'Karakter';
        $data['type']  = 'Karakter';
        $data['sub_category'] = $sub_category;
        return View::make('admin.mulai-bermain.create', $data);
    }

    public function createInGame()
    {
        $sub_category = array(
            "Status"        => "Status",
            "Skill"         => "Skill",
            "Naik Level"    => "Naik Level",
            "Barang"        => "Barang",
            "Menu Utama"    => "Menu Utama",
            "Menu Singkat"  => "Menu Singkat",
            "Layar Pesan"   => "Layar Pesan",
            "Option"        => "Option",
            "Daftar Menu"   => "Daftar Menu",
        );

        $data['title'] = 'Dalam Game';
        $data['type']  = 'Dalam Game';
        $data['sub_category'] = $sub_category;
        return View::make('admin.mulai-bermain.create', $data);
    }

    public function createKontrol()
    {
        $sub_category = array(
            "Mouse dan Keyboard"    => "Mouse dan Keyboard",
            "Berpindah dan Wrap"    => "Berpindah dan Wrap",
            "Menyerang dan Kombo"   => "Menyerang dan Kombo",
            "Tombol Singkat"        => "Tombol Singkat",
        );

        $data['title'] = 'Kontrol';
        $data['type']  = 'Kontrol';
        $data['sub_category'] = $sub_category;
        return View::make('admin.mulai-bermain.create', $data);
    }

    public function createTeman()
    {
        $sub_category = array(
            "Messenger - Team"   => "Messenger - Team",
            "Messenger - Group"  => "Messenger - Group",
            "Komunitas"          => "Komunitas",
        );

        $data['title'] = 'Berteman';
        $data['type']  = 'Berteman';
        $data['sub_category'] = $sub_category;
        return View::make('admin.mulai-bermain.create', $data);
    }

    public function createLain()
    {
        $sub_category = array(
            "Berbicara"             => "Berbicara",
            "Misi"                  => "Misi",
            "Memancing Pot-Besar"   => "Memancing Pot-Besar",
            "Quit Menu"             => "Quit Menu",
        );

        $data['title'] = 'Lain-Lain';
        $data['type']  = 'Lain-Lain';
        $data['sub_category'] = $sub_category;
        return View::make('admin.mulai-bermain.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new MulaiBermain;
        $data->desc             = $request->desc;
        $data->category         = $request->category;
        $data->sub_category     = $request->sub_category;
        $data->save();
        return redirect('/mulai-bermain/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MulaiBermain::findOrFail($id);
        return view('admin.mulai-bermain.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data['title'] = 'Intro';
        $data['type']  = 'Intro';
        $main = MulaiBermain::findOrFail($id);
        return View::make('admin.mulai-bermain.edit', $data, compact('main'));
    }

    public function editClient($id)
    {
        $sub_category = array(
            "Notice Patch"      => "Notice Patch",
            "Ubah Pengaturan"   => "Ubah Pengaturan",
            "Login"             => "Login",
        );

        $data['title'] = 'Client Seal';
        $data['type']  = 'Client Seal';
        $data['sub_category'] = $sub_category;
        $main = MulaiBermain::findOrFail($id);
        return View::make('admin.mulai-bermain.edit', $data, compact('main'));
    }

    public function editKarakter($id)
    {
        $sub_category = array(
            "Membuat Karakter Baru" => "Membuat Karakter Baru",
            "Profesi"               => "Profesi",
            "NPC"                   => "NPC",
        );

        $data['title'] = 'Karakter';
        $data['type']  = 'Karakter';
        $data['sub_category'] = $sub_category;
        $main = MulaiBermain::findOrFail($id);
        return View::make('admin.mulai-bermain.edit', $data, compact('main'));
    }

    public function editInGame($id)
    {
        $sub_category = array(
            "Status"        => "Status",
            "Skill"         => "Skill",
            "Naik Level"    => "Naik Level",
            "Barang"        => "Barang",
            "Menu Utama"    => "Menu Utama",
            "Menu Singkat"  => "Menu Singkat",
            "Layar Pesan"   => "Layar Pesan",
            "Option"        => "Option",
            "Daftar Menu"   => "Daftar Menu",
        );

        $data['title'] = 'Dalam Game';
        $data['type']  = 'Dalam Game';
        $data['sub_category'] = $sub_category;
        $main = MulaiBermain::findOrFail($id);
        return View::make('admin.mulai-bermain.edit', $data, compact('main'));
    }

    public function editKontrol($id)
    {
        $sub_category = array(
            "Mouse dan Keyboard"    => "Mouse dan Keyboard",
            "Berpindah dan Wrap"    => "Berpindah dan Wrap",
            "Menyerang dan Kombo"   => "Menyerang dan Kombo",
            "Tombol Singkat"        => "Tombol Singkat",
        );

        $data['title'] = 'Kontrol';
        $data['type']  = 'Kontrol';
        $data['sub_category'] = $sub_category;
        $main = MulaiBermain::findOrFail($id);
        return View::make('admin.mulai-bermain.edit', $data, compact('main'));
    }

    public function editTeman($id)
    {
        $sub_category = array(
            "Messenger - Team"   => "Messenger - Team",
            "Messenger - Group"  => "Messenger - Group",
            "Komunitas"          => "Komunitas",
        );

        $data['title'] = 'Berteman';
        $data['type']  = 'Berteman';
        $data['sub_category'] = $sub_category;
        $main = MulaiBermain::findOrFail($id);
        return View::make('admin.mulai-bermain.edit', $data, compact('main'));
    }

    public function editLain($id)
    {
        $sub_category = array(
            "Berbicara"             => "Berbicara",
            "Misi"                  => "Misi",
            "Memancing Pot-Besar"   => "Memancing Pot-Besar",
            "Quit Menu"             => "Quit Menu",
        );

        $data['title'] = 'Lain-Lain';
        $data['type']  = 'Lain-Lain';
        $data['sub_category'] = $sub_category;
        $main = MulaiBermain::findOrFail($id);
        return View::make('admin.mulai-bermain.edit', $data, compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = MulaiBermain::findOrFail($id);
        $data->desc             = $request->desc;
        $data->sub_category     = $request->sub_category;
        $data->save();
        // redirect
        return Redirect::action('Admin\MulaiBermainController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MulaiBermain::findOrFail($id);
        $data->delete();
        return Redirect::action('Admin\MulaiBermainController@index')->with(['success' => 'Data telah dihapus']);
    }
}

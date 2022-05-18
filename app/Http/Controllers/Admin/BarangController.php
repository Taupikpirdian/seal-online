<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barang;
use View;
use Illuminate\Support\Facades\Redirect;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros         = Barang::where('category', 'Intro')->paginate(25);
        $kepalas        = Barang::where('category', 'Kepala')->paginate(25);
        $bajus          = Barang::where('category', 'Baju')->paginate(25);
        $sepatus        = Barang::where('category', 'Sepatu')->paginate(25);
        $perisais       = Barang::where('category', 'Perisai')->paginate(25);
        $senjatas       = Barang::where('category', 'Senjata')->paginate(25);
        $kostums        = Barang::where('category', 'Kostum')->paginate(25);
        $aksesoris      = Barang::where('category', 'Aksesoris')->paginate(25);

        return view('admin.barang.index', compact([
            'intros', 
            'kepalas', 
            'bajus', 
            'sepatus', 
            'perisais', 
            'senjatas', 
            'kostums',
            'aksesoris',
        ]));
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
        return View::make('admin.barang.create', $data);
    }

    public function createKepala()
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Kepala';
        $data['type']           = 'Kepala';
        $data['sub_category']   = $sub_category;
        return View::make('admin.barang.create', $data);
    }

    public function createBaju()
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Baju';
        $data['type']           = 'Baju';
        $data['sub_category']   = $sub_category;
        return View::make('admin.barang.create', $data);
    }

    public function createSepatu()
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Sepatu';
        $data['type']           = 'Sepatu';
        $data['sub_category']   = $sub_category;
        return View::make('admin.barang.create', $data);
    }

    public function createPerisai()
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Perisai';
        $data['type']           = 'Perisai';
        $data['sub_category']   = $sub_category;
        return View::make('admin.barang.create', $data);
    }

    public function createSenjata()
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Senjata';
        $data['type']           = 'Senjata';
        $data['sub_category']   = $sub_category;
        return View::make('admin.barang.create', $data);
    }

    public function createKostum()
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Kostum';
        $data['type']           = 'Kostum';
        $data['sub_category']   = $sub_category;
        return View::make('admin.barang.create', $data);
    }

    public function createAksesoris()
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Aksesoris';
        $data['type']           = 'Aksesoris';
        $data['sub_category']   = $sub_category;
        return View::make('admin.barang.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Barang;
        $data->title            = $request->title;
        $data->desc             = $request->desc;
        $data->category         = $request->category;
        $data->sub_category     = $request->sub_category;
        $data->save();
        return redirect('/barang/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Barang::findOrFail($id);
        return view('admin.barang.show', compact('data'));
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
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
    }

    public function editKepala($id)
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Kepala';
        $data['type']           = 'Kepala';
        $data['sub_category']   = $sub_category;
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
    }

    public function editBaju($id)
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Baju';
        $data['type']           = 'Baju';
        $data['sub_category']   = $sub_category;
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
    }

    public function editSepatu($id)
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Sepatu';
        $data['type']           = 'Sepatu';
        $data['sub_category']   = $sub_category;
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
    }

    public function editPerisai($id)
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Perisai';
        $data['type']           = 'Perisai';
        $data['sub_category']   = $sub_category;
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
    }

    public function editSenjata($id)
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Senjata';
        $data['type']           = 'Senjata';
        $data['sub_category']   = $sub_category;
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
    }

    public function editKostum($id)
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Kostum';
        $data['type']           = 'Kostum';
        $data['sub_category']   = $sub_category;
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
    }

    public function editAksesoris($id)
    {
        $sub_category = array(
            "Beginner"      => "Beginner",
            "Warrior"       => "Warrior",
            "Knight"        => "Knight",
            "Magician"      => "Magician",
            "Cleric"        => "Cleric",
            "Clown"         => "Clown",
            "Craftsman"     => "Craftsman",
        );

        $data['title']          = 'Aksesoris';
        $data['type']           = 'Aksesoris';
        $data['sub_category']   = $sub_category;
        $main = Barang::findOrFail($id);
        return View::make('admin.barang.edit', $data, compact('main'));
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
        $data = Barang::findOrFail($id);
        $data->title            = $request->title;
        $data->desc             = $request->desc;
        $data->sub_category     = $request->sub_category;
        $data->save();
        // redirect
        return Redirect::action('Admin\BarangController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::findOrFail($id);
        $data->delete();
        return Redirect::action('Admin\BarangController@index')->with(['success' => 'Data telah dihapus']);
    }
}

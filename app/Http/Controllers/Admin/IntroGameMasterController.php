<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\IntroGameMaster;
use View;
use Illuminate\Support\Facades\Redirect;

class IntroGameMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // code
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.intro-game-master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game_master = new IntroGameMaster;
        $game_master->title          = $request->title;
        $game_master->desc           = $request->desc;
        $game_master->save();
        // redirect
        return redirect('/game-master/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game_master = IntroGameMaster::findOrFail($id);
        return view('admin.intro-game-master.show', array('game_master' => $game_master));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game_master = IntroGameMaster::findOrFail($id);     
        return view('admin.intro-game-master.edit',compact('game_master'));
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
        $game_master = IntroGameMaster::findOrFail($id);   
        $game_master->title          = $request->title;
        $game_master->desc           = $request->desc;
        $game_master->save();
        // redirect
        return redirect('/game-master/index')->with(['success' => 'Data telah di ubah']);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game_master = IntroGameMaster::findOrFail($id);
        $game_master->delete();
        return Redirect::action('Admin\GameMasterController@index')->with(['success' => 'Data telah dihapus']);
    }
}

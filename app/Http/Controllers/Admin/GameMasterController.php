<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GameMaster;
use App\IntroGameMaster;
use View;
use Illuminate\Support\Facades\Redirect;
use File;
use Image;

class GameMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro_game_masters = IntroGameMaster::orderBy('created_at', 'desc')->paginate(25);
        $game_masters = GameMaster::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.game-master.index', compact('game_masters', 'intro_game_masters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.game-master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game_master = new GameMaster;
        $game_master->nama          = $request->nama;
        $game_master->umur          = $request->umur;
        $game_master->alamat        = $request->alamat;
        $game_master->hobi          = $request->hobi;
        $game_master->favorit_pet   = $request->favorit_pet;
        $game_master->favorit_warna = $request->favorit_warna;
        $game_master->reputasi      = $request->reputasi;
        $game_master->motto         = $request->motto;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/game-master/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/game-master/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $game_master->img = $imageName;
        }

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
        $game_master = GameMaster::findOrFail($id);
        return view('admin.game-master.show', array('game_master' => $game_master));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game_master = GameMaster::findOrFail($id);     
        return view('admin.game-master.edit',compact('game_master'));
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
        $game_master = GameMaster::findOrFail($id);   
        $game_master->nama          = $request->nama;
        $game_master->umur          = $request->umur;
        $game_master->alamat        = $request->alamat;
        $game_master->hobi          = $request->hobi;
        $game_master->favorit_pet   = $request->favorit_pet;
        $game_master->favorit_warna = $request->favorit_warna;
        $game_master->reputasi      = $request->reputasi;
        $game_master->motto         = $request->motto;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/game-master/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/game-master/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $game_master->img = $imageName;
        }

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
        $game_master = GameMaster::findOrFail($id);
        $game_master->delete();
        return Redirect::action('Admin\GameMasterController@index')->with(['success' => 'Data telah dihapus']);
    }
}

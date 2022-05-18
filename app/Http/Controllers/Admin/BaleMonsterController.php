<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\IntroBale;
use App\MonsterBale;
use Auth;
use View;
use Alert;
use File;
use Image;

class BaleMonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro_bales    = IntroBale::orderBy('created_at', 'desc')->get();
        $monster_bales  = MonsterBale::orderBy('created_at', 'desc')->get();
        return view('admin.bale.index', compact('intro_bales', 'monster_bales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = [
            '0'  => 'Bale',
            '1'  => 'Bos Bale',
        ];

        return View::make('admin.bale.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bale_monster = new MonsterBale;
        $bale_monster->name    = $request->name;
        $bale_monster->type    = $request->category;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            // nama file original
            $origin = $img->getClientOriginalName();
            $imageName = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/bale/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            // $image->resize(1600, 854);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/bale/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $bale_monster->img = $imageName;
        }

        $bale_monster->lokasi       = $request->lokasi;
        $bale_monster->level        = $request->level;
        $bale_monster->elemen       = $request->elemen;
        $bale_monster->hp           = $request->hp;
        $bale_monster->atk          = $request->atk;
        $bale_monster->def          = $request->def;
        $bale_monster->item_drop    = $request->item_drop;
        $bale_monster->deskripsi    = $request->desc;
        $bale_monster->save();

        return Redirect::action('Admin\BaleMonsterController@index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bale_monster = MonsterBale::findOrFail($id);
        return view('admin.bale.show', compact('bale_monster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = [
            '0'  => 'Bale',
            '1'  => 'Bos Bale',
        ];

        $bale_monster = MonsterBale::findOrFail($id);     
        return view('admin.bale.edit', compact('bale_monster', 'category'));
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
        $bale_monster = MonsterBale::findOrFail($id);     
        $bale_monster->name    = $request->name;
        $bale_monster->type    = $request->category;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            // nama file original
            $origin = $img->getClientOriginalName();
            $imageName = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/bale/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            // $image->resize(1600, 854);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/bale/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $bale_monster->img = $imageName;
        }

        $bale_monster->lokasi       = $request->lokasi;
        $bale_monster->level        = $request->level;
        $bale_monster->elemen       = $request->elemen;
        $bale_monster->hp           = $request->hp;
        $bale_monster->atk          = $request->atk;
        $bale_monster->def          = $request->def;
        $bale_monster->item_drop    = $request->item_drop;
        $bale_monster->deskripsi    = $request->desc;
        $bale_monster->save();

        return Redirect::action('Admin\BaleMonsterController@index')->with(['success' => 'Data telah di ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bale_monster = MonsterBale::findOrFail($id);
        $bale_monster->delete();
        return Redirect::action('Admin\BaleMonsterController@index')->with(['success' => 'Data telah dihapus']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createIntro()
    {
        $category = [
            '0'  => 'Bale',
            '1'  => 'Bos Bale',
        ];

        return View::make('admin.intro-bale.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeIntro(Request $request)
    {
        $intro = new IntroBale;
        $intro->desc    = $request->desc;
        $intro->type    = $request->category;
        $intro->save();
        return Redirect::action('Admin\BaleMonsterController@index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editIntro($id)
    {
        $category = [
            '0'  => 'Bale',
            '1'  => 'Bos Bale',
        ];

        $intro = IntroBale::findOrFail($id);     
        return view('admin.intro-bale.edit', compact('intro', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateIntro(Request $request, $id)
    {
        $intro = IntroBale::findOrFail($id);     
        $intro->desc    = $request->desc;
        $intro->type    = $request->category;
        $intro->save();
        return Redirect::action('Admin\BaleMonsterController@index')->with(['success' => 'Data telah di ubah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showIntro($id)
    {
        $intro = IntroBale::findOrFail($id);
        return view('admin.intro-bale.show', array('intro' => $intro));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyIntro($id)
    {
        $intro = IntroBale::findOrFail($id);
        $intro->delete();
        return Redirect::action('Admin\BaleMonsterController@index')->with(['success' => 'Data telah dihapus']);
    }
}

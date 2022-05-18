<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profesi;
use App\Skill;
use View;
use File;
use Image;

class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesis   = Profesi::orderBy('created_at', 'desc')->paginate(25);
        $skills     = Skill::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.profesi.index', compact('profesis', 'skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.profesi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesi = new Profesi;
        $profesi->title          = $request->title;
        $profesi->desc           = $request->desc;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/profesi/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/profesi/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $profesi->img = $imageName;
        }
        $profesi->save();
        // redirect
        return redirect('/profesi/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesi = Profesi::findOrFail($id);
        return view('admin.profesi.show', array('profesi' => $profesi));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesi = Profesi::findOrFail($id);     
        return view('admin.profesi.edit',compact('profesi'));
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
        $profesi = Profesi::findOrFail($id);     
        $profesi->title          = $request->title;
        $profesi->desc           = $request->desc;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/profesi/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/profesi/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $profesi->img = $imageName;
        }
        $profesi->save();
        // redirect
        return redirect('/profesi/index')->with(['success' => 'Data telah di ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesi = Profesi::findOrFail($id);
        $profesi->delete();
        return Redirect::action('Admin\ProfesiController@index')->with(['success' => 'Data telah dihapus']);
    }
}

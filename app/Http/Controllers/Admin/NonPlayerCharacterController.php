<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NonPlayerCharacter;
use Auth;
use View;
use Alert;
use File;
use Image;

class NonPlayerCharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = NonPlayerCharacter::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.npc.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.npc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new NonPlayerCharacter;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/npc/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/npc/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $data->img = $imageName;
        }

        $data->title       = $request->title;
        $data->desc        = $request->desc;
        $data->save();
        // redirect
        return Redirect::action('Admin\NonPlayerCharacterController@index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = NonPlayerCharacter::findOrFail($id);
        return view('admin.npc.show', array('data' => $data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = NonPlayerCharacter::findOrFail($id);     
        return view('admin.npc.edit', compact('data'));
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
        $data = NonPlayerCharacter::findOrFail($id);     

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/npc/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/npc/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $data->img = $imageName;
        }

        $data->title       = $request->title;
        $data->desc        = $request->desc;
        $data->save();
        // redirect
        return Redirect::action('Admin\NonPlayerCharacterController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = NonPlayerCharacter::findOrFail($id);
        $data->delete();
        return Redirect::action('Admin\NonPlayerCharacterController@index')->with(['success' => 'Data telah dihapus']);
    }
}

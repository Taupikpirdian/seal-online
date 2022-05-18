<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;
use View;
use App\Peta;
use Illuminate\Support\Facades\Redirect;


class PetaController extends Controller
{
    public function index()
    {
        $petas = Peta::all()->paginate(25);
        return view('admin.peta.index', compact('petas'));
    }

    public function create()
    {
        return view('admin.peta.create');
    }

    public function store(Request $request)
    {
        $peta = new Peta;
        $peta->category       = $request->category;
        $peta->title          = $request->title;
        $peta->deskripsi      = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/peta/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/peta/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $peta->img = $imageName;
        }
        $peta->save();
        // redirect
        return redirect('/peta/index')->with(['success' => 'Data telah di tambahkan']);
    }

    public function show(Request $request, $id){
        $peta = Peta::findOrFail($id);
        return view('admin.peta.show', array('peta' => $peta));
    }

    public function edit($id){
        $peta = Peta::findOrFail($id);
        return view('admin.peta.edit', array('peta' => $peta));
    }

    public function destroy($id)
    {
        $peta = Peta::findOrFail($id);
        $peta->delete();
        return Redirect::action('Admin\PetaController@index')->with(['success' => 'Data telah dihapus']);
    }

    public function update(Request $request, $id)
    {
        $peta = Peta::findOrFail($id);  
        $peta->category       = $request->category;
        $peta->title          = $request->title;
        $peta->deskripsi      = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/peta/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/peta/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $peta->img = $imageName;
        }
        $peta->save();
        // redirect
        return redirect('/peta/index')->with(['success' => 'Data Berhasil Diubah']);
    }

}

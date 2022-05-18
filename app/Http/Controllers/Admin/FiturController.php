<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Fitur;
use Alert;
use view;
use File;
use Image;

class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiturs = Fitur::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.fitur.index', compact('fiturs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.fitur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fitur = new Fitur;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            // nama file original
            $origin = $img->getClientOriginalName();
            $imageName = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/fitur/thumbs/');
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
            $destinationPath = public_path('images/fitur/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $fitur->img = $imageName;
        }

        $fitur->title   = $request->title;
        $fitur->desc    = $request->desc;
        $fitur->save();
        // redirect
        return Redirect::action('Admin\FiturController@index')->with(['success' => 'Data telah di tambahkan']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fitur = Fitur::findOrFail($id);
        return view('admin.fitur.show', array('fitur' => $fitur));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fitur = Fitur::findOrFail($id);     
        return view('admin.fitur.edit',compact('fitur'));
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
        $fitur = Fitur::findOrFail($id);
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            // nama file original
            $origin = $img->getClientOriginalName();
            $imageName = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/fitur/thumbs/');
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
            $destinationPath = public_path('images/fitur/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $fitur->img = $imageName;
        }

        $fitur->title   = $request->title;
        $fitur->desc    = $request->desc;
        $fitur->save();
        // redirect=
        return Redirect::action('Admin\FiturController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fitur = Fitur::findOrFail($id);
        $fitur->delete();
        return Redirect::action('Admin\FiturController@index')->with(['success' => 'Data telah dihapus']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackgroundUpdateSeal;
use Auth;
use View;
use Alert;
use File;
use Image;
use Illuminate\Support\Facades\Redirect;

class BackgroundUpdateSealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = BackgroundUpdateSeal::orderBy('created_at', 'desc')->paginate(25);
        $category = [
            '0'    => 'Carnival City', 
            '1'    => 'Guild Wars', 
            '2'    => 'Service', 
        ];
        return view('admin.background-update.index', compact('datas', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = [
            '0'    => 'Carnival City', 
            '1'    => 'Guild Wars', 
            '2'    => 'Service', 
        ];
        return View::make('admin.background-update.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new BackgroundUpdateSeal;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/background-update/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/background-update/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $data->img = $imageName;
        }

        $data->desc        = $request->desc;
        $data->category    = $request->category;
        $data->save();
        // redirect
        return Redirect::action('Admin\BackgroundUpdateSealController@index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BackgroundUpdateSeal::findOrFail($id);
        $category = [
            '0'    => 'Carnival City', 
            '1'    => 'Guild Wars', 
            '2'    => 'Service', 
        ];
        return view('admin.background-update.show', array('data' => $data, 'category' => $category));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BackgroundUpdateSeal::findOrFail($id);
        $category = [
            '0'    => 'Carnival City', 
            '1'    => 'Guild Wars', 
            '2'    => 'Service', 
        ]; 
        return view('admin.background-update.edit', compact('data', 'category'));
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
        $data = BackgroundUpdateSeal::findOrFail($id);

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/background-update/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/background-update/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $data->img = $imageName;
        }

        $data->desc        = $request->desc;
        $data->category    = $request->category;
        $data->save();
        // redirect
        return Redirect::action('Admin\BackgroundUpdateSealController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = BackgroundUpdateSeal::findOrFail($id);
        $data->delete();
        return Redirect::action('Admin\BackgroundUpdateSealController@index')->with(['success' => 'Data telah dihapus']);
    }
}

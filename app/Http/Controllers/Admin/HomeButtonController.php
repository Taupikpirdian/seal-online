<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\HomeButton;
use Auth;
use View;
use Alert;
use File;
use Image;

class HomeButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buttonHomes = HomeButton::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.button-home.index', compact('buttonHomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.button-home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buttonHome = new HomeButton;
        $buttonHome->caption  = $request->caption;
        $buttonHome->link     = $request->link;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/button-home/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/button-home/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $buttonHome->img = $imageName;
        }

        $buttonHome->position   = $request->position;
        $buttonHome->status     = $request->status;
        $buttonHome->save();
        // redirect
        return redirect('/button-home/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buttonHome = HomeButton::findOrFail($id);     
        return view('admin.button-home.edit', compact('buttonHome'));
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
        $buttonHome = HomeButton::findOrFail($id);
        $buttonHome->caption  = $request->caption;
        $buttonHome->link     = $request->link;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/button-home/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/button-home/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $buttonHome->img = $imageName;
        }

        $buttonHome->position   = $request->position;
        $buttonHome->status     = $request->status;
        $buttonHome->save();

        return Redirect::action('Admin\HomeButtonController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buttonHome = HomeButton::findOrFail($id);
        $buttonHome->delete();
        return Redirect::action('Admin\HomeButtonController@index')->with(['success' => 'Data telah dihapus']);
    }
}

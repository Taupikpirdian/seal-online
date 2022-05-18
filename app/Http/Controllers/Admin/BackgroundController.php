<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Background;
use Auth;
use View;
use Alert;
use File;
use Image;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $backgrounds = Background::orderBy('created_at', 'desc')->paginate(10);
        $countDataBackground = Background::count();
        return view('admin.background.index', compact('backgrounds', 'countDataBackground'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.background.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $background = new Background;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/background/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(1600, 854);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/background/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $background->img = $imageName;
        }

        $background->img_header         = '0';
        $background->title_img_left     = '0';
        $background->link_img_left      = '0';
        $background->img_left           = '0';
        $background->title_img_right    = '0';
        $background->link_img_right     = '0';
        $background->img_right          = '0';;
        $background->save();
        // redirect
        return redirect('/background/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $background = Background::findOrFail($id);     
        return view('admin.background.edit', compact('background'));
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
        $background = Background::findOrFail($id);

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/background/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(1600, 854);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/background/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $background->img = $imageName;
        }

        $background->img_header         = '0';
        $background->title_img_left     = '0';
        $background->link_img_left      = '0';
        $background->img_left           = '0';
        $background->title_img_right    = '0';
        $background->link_img_right     = '0';
        $background->img_right          = '0';;
        $background->save();
        // redirect
        return Redirect::action('Admin\BackgroundController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $background = Background::findOrFail($id);
        $background->delete();
        return Redirect::action('Admin\BackgroundController@index')->with(['success' => 'Data telah dihapus']);
    }
}

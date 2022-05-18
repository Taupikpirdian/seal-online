<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Introduction;
use Auth;
use View;
use Alert;
use File;
use Image;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros = Introduction::orderBy('created_at', 'desc')->paginate(25);
        $countData = Introduction::count();
        return view('admin.intro.index', compact('intros', 'countData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.intro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengenalan = new Introduction;

        if ($request->img_about) {
            // addfoto
            $img_about = $request->file('img_about');
            $imageName = time().'.'.$img_about->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/intro/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_about->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/intro/');
            $img_about = Image::make($img_about)->encode('jpg', 50);
            $img_about->save($destinationPath.'/'.$imageName);
            //save data image to db
            $pengenalan->img_about = $imageName;
        }

        if ($request->img_story) {
            // addfoto
            $img_story = $request->file('img_story');
            $imageName = time().'.'.$img_story->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/intro/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_story->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/intro/');
            $img_story = Image::make($img_story)->encode('jpg', 50);
            $img_story->save($destinationPath.'/'.$imageName);
            //save data image to db
            $pengenalan->img_story = $imageName;
        }

        $pengenalan->about_seal        = $request->about_seal;
        $pengenalan->story_seal        = $request->story_seal;
        $pengenalan->save();
        // redirect
        return Redirect::action('Admin\IntroController@index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intro = Introduction::findOrFail($id);
        return view('admin.intro.show', array('intro' => $intro));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intro = Introduction::findOrFail($id);     
        return view('admin.intro.edit', compact('intro'));
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
        $pengenalan = Introduction::findOrFail($id);

        if ($request->img_about) {
            // addfoto
            $img_about = $request->file('img_about');
            $imageName = time().'.'.$img_about->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/intro/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_about->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/intro/');
            $img_about = Image::make($img_about)->encode('jpg', 50);
            $img_about->save($destinationPath.'/'.$imageName);
            //save data image to db
            $pengenalan->img_about = $imageName;
        }

        if ($request->img_story) {
            // addfoto
            $img_story = $request->file('img_story');
            $imageName = time().'.'.$img_story->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/intro/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_story->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/intro/');
            $img_story = Image::make($img_story)->encode('jpg', 50);
            $img_story->save($destinationPath.'/'.$imageName);
            //save data image to db
            $pengenalan->img_story = $imageName;
        }

        $pengenalan->about_seal        = $request->about_seal;
        $pengenalan->story_seal        = $request->story_seal;
        $pengenalan->save();
        // redirect
        return Redirect::action('Admin\IntroController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengenalan = Introduction::findOrFail($id);
        $pengenalan->delete();
        return Redirect::action('Admin\IntroController@index')->with(['success' => 'Data telah dihapus']);
    }
}

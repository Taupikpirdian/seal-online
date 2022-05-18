<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Gallery;
use Alert;
use view;
use File;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = [
            'movie'         => 'movie', 
            'komik'         => 'komik', 
            'screenshot'    => 'screenshot', 
            'wallpaper'     => 'wallpaper', 
            'fan art'       => 'fan art', 
        ];
        return View::make('admin.galleries.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery;
        if ($request->img_medium) {
            // addfoto
            $img = $request->file('img_medium');
            // nama file original
            $origin = $img->getClientOriginalName();
            $imageName = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/gallery/800/thumbs/');
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
            $destinationPath = public_path('images/gallery/800/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $gallery->img_medium = $imageName;
        }

        if ($request->img_height) {
            // addfoto
            $img_height = $request->file('img_height');
            // nama file original
            $origin = $img_height->getClientOriginalName();
            $imageName2 = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/gallery/1024/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_height->getRealPath());
            $image->save($destinationPath.'/'.$imageName2);
            //original
            $destinationPath = public_path('images/gallery/1024/');
            $img_height = Image::make($img_height)->encode('jpg', 50);
            $img_height->save($destinationPath.'/'.$imageName2);
            //save data image to db
            $gallery->img_height = $imageName2;
        }
        $gallery->category = $request->category;
        $gallery->save();
        // redirect
        return Redirect::action('Admin\GalleryController@index')->with(['success' => 'Data telah di tambahkan']);
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
        $category = [
            'movie'         => 'movie', 
            'komik'         => 'komik', 
            'screenshot'    => 'screenshot', 
            'wallpaper'     => 'wallpaper', 
            'fan art'       => 'fan art', 
        ];
        $gallery = Gallery::findOrFail($id);     
        return view('admin.galleries.edit', compact('gallery', 'category'));
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
        $gallery = Gallery::findOrFail($id);
        if ($request->img_medium) {
            // addfoto
            $img = $request->file('img_medium');
            // nama file original
            $origin = $img->getClientOriginalName();
            $imageName = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/gallery/800/thumbs/');
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
            $destinationPath = public_path('images/gallery/800/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $gallery->img_medium = $imageName;
        }

        if ($request->img_height) {
            // addfoto
            $img_height = $request->file('img_height');
            // nama file original
            $origin = $img_height->getClientOriginalName();
            $imageName2 = time().'-'.$origin;
            //thumbs
            $destinationPath = public_path('images/gallery/1024/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_height->getRealPath());
            $image->save($destinationPath.'/'.$imageName2);
            //original
            $destinationPath = public_path('images/gallery/1024/');
            $img_height = Image::make($img_height)->encode('jpg', 50);
            $img_height->save($destinationPath.'/'.$imageName2);
            //save data image to db
            $gallery->img_height = $imageName2;
        }
        $gallery->category = $request->category;
        $gallery->save();
        // redirect
        return Redirect::action('Admin\GalleryController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return Redirect::action('Admin\GalleryController@index')->with(['success' => 'Data telah dihapus']);
    }
}

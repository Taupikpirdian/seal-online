<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Content;
use Auth;
use View;
use Alert;
use File;
use Image;

class ContenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::orderBy('created_at', 'desc')->paginate(25);
        $start_page= (($contents->currentPage()-1) * 25) + 1;
        return view('admin.content.index', compact('contents', 'start_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get last id
        $content_id = Content::pluck('id')->last();
        // last id+1
        $last_id = $content_id + 1;
        
        $content = new Content;
        $content->title        = $request->title;
        $content->slug         = str_slug($content->title).'-'.$last_id;
        $content->user_id      = Auth::user()->id;
        $content->desc         = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/content/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(1000, 854);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/content/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $content->img = $imageName;
        }
        $content->save();
        // redirect
        return redirect('/content/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.content.show', array('content' => $content));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::findOrFail($id);     
        return view('admin.content.edit',compact('content'));
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
        $content = Content::findOrFail($id);
        $content->title        = $request->title;
        $content->slug         = str_slug($content->title).'-'.$content->id;
        $content->user_id      = Auth::user()->id;
        $content->desc         = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/content/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(1000, 854);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/content/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $content->img = $imageName;
        }
        $content->save();
        // redirect
        return Redirect::action('Admin\ContenController@index')->with(['success' => 'Data telah diubah']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        return Redirect::action('Admin\ContenController@index')->with(['success' => 'Data telah dihapus']);
    }

    public function search(Request $request){
        $search = $request->get('search');
        $contents = Content::where('title','LIKE','%'.$search.'%')->paginate(25);
        $start_page= (($contents->currentPage()-1) * 25) + 1;
        return view('admin.content.index',compact('contents', 'start_page'));
    }
}

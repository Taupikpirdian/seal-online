<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Guide;
use Auth;
use View;
use Alert;
use File;
use Image;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Guides')){
            $guides = Guide::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($guides->currentPage()-1) * 10) + 1;
            return view('admin.guide.index',array('guides'=>$guides,'start_page'=>$start_page));
        }else{
            print_r('ERROR PERMISSIONS.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // WARRIOR
      // KNIGHT
      // MAGE
      // PRIEST
      // JESTER
      // CRAFTMAN
      if(Auth::user()->hasAnyRole('Create Guide')){
        // redirect
        return View::make('admin.guide.create');
      }else{
        return response ("ERROR PERMISSIONS", 401);
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guide = new Guide;
        $guide->title        	= $request->title;
        $guide->desc         	= $request->desc;
        $guide->informasi_quest = $request->informasi_quest;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/guide/thumbs/');
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
            $destinationPath = public_path('images/guide/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $guide->img = $imageName;
        }
        $guide->save();
        // redirect
        return redirect('/guide/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Guide')){
          $guide = Guide::findOrFail($id);
          return view('admin.guide.show', array('guide' => $guide));
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->hasAnyRole('Edit Guide')){
          $guide = Guide::findOrFail($id);     
          return view('admin.guide.edit', array('guide' => $guide));
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
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
        if(Auth::user()->hasAnyRole('Edit Guide')){
          $guide = Guide::findOrFail($id);
          $guide->title        	= $request->title;
	        $guide->desc         	= $request->desc;
	        $guide->informasi_quest = $request->informasi_quest;
	        if ($request->img) {
	            // addfoto
	            $img = $request->file('img');
	            $imageName = time().'.'.$img->getClientOriginalExtension();
	            //thumbs
	            $destinationPath = public_path('images/guide/thumbs/');
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
	            $destinationPath = public_path('images/guide/');
	            $img = Image::make($img)->encode('jpg', 50);
	            $img->save($destinationPath.'/'.$imageName);
	            //save data image to db
	            $guide->img = $imageName;
	        }
          $guide->save();
          // redirect
          return Redirect::action('Admin\GuideController@index')->with(['success' => 'Data telah diubah']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->hasAnyRole('Delete Guide')){
          $guides = Guide::findOrFail($id);
          $guides->delete();
          return Redirect::action('Admin\GuideController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $guides = Guide::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($guides->currentPage()-1) * 10) + 1;
      return view('admin.guide.index',array('guides'=>$guides,'start_page'=>$start_page));
    }
}

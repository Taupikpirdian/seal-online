<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Iklan;
use Auth;
use View;
use Alert;
use File;
use Image;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Iklans')){
            $iklans = Iklan::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($iklans->currentPage()-1) * 10) + 1;
            return view('admin.iklan.index',array('iklans'=>$iklans,'start_page'=>$start_page));
        }else{
            // return Redirect::action('Admin\AdminController@memberfeed')->with
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
        if(Auth::user()->hasAnyRole('Create Iklan')){
            // redirect
            $status = array(
              'Publish'     => 'Publish',
              'Draf'        => 'Draf'
            );
            return View::make('admin.iklan.create', compact('status'));
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
        $iklan = new Iklan;
        $iklan->title        = $request->title;
        $iklan->link         = $request->link;
        $iklan->status       = $request->status;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/iklan/thumbs/');
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
            $destinationPath = public_path('images/iklan/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $iklan->img = $imageName;
        }
        $iklan->save();
        // redirect
        return redirect('/iklan/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Iklan')){
          $iklan = Iklan::findOrFail($id);
          return view('admin.iklan.show', array('iklan' => $iklan));
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
        if(Auth::user()->hasAnyRole('Edit Iklan')){
          $iklan = Iklan::findOrFail($id);     
          $status = array(
              'Publish'     => 'Publish',
              'Draf'        => 'Draf'
            );
          return view('admin.iklan.edit',compact('status'), array('iklan' => $iklan));
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
        if(Auth::user()->hasAnyRole('Edit Iklan')){
          $iklan = Iklan::findOrFail($id);
          $iklan->title        = $request->title;
          $iklan->link         = $request->link;
          $iklan->status       = $request->status;
          if ($request->img) {
              // addfoto
              $img = $request->file('img');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/iklan/thumbs/');
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
              $destinationPath = public_path('images/iklan/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $iklan->img = $imageName;
          }
          $iklan->save();
          // redirect
          return Redirect::action('Admin\IklanController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Iklan')){
          $iklan = Iklan::findOrFail($id);
          $iklan->delete();
          Alert::success('Berhasil!', 'Data telah dihapus.');
          return Redirect::action('Admin\IklanController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $iklans = Iklan::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($iklans->currentPage()-1) * 10) + 1;
      return view('admin.iklan.index',array('iklans'=>$iklans,'start_page'=>$start_page));
    }
}

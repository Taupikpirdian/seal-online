<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TopUp;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Alert;
use View;
use File;
use Image;

class TopUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Top Up')){
            $top_ups = TopUp::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($top_ups->currentPage()-1) * 10) + 1;
            return view('admin.top_up.index',array('top_ups'=>$top_ups,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Top Up')){
            // redirect
            return View::make('admin.top_up.create');
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
        $top_up = new TopUp;
        $top_up->title        = $request->title;
        $top_up->desc         = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/topup/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(500, 600);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/topup/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $top_up->img = $imageName;
        }
        $top_up->save();
        // redirect
        return redirect('/top-up/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Top Up')){
          $top_up = TopUp::findOrFail($id);
          return view('admin.top_up.show', array('top_up' => $top_up));
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
        if(Auth::user()->hasAnyRole('Edit Top Up')){
          $top_up = TopUp::findOrFail($id);     
          return view('admin.top_up.edit', array('top_up' => $top_up));
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
        if(Auth::user()->hasAnyRole('Edit Top Up')){
          $top_up = TopUp::findOrFail($id);
          $top_up->title        = $request->title;
          $top_up->desc         = $request->desc;
          if ($request->img) {
              // addfoto
              $img = $request->file('img');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/topup/thumbs/');
              if(!File::exists($destinationPath)){
                  if(File::makeDirectory($destinationPath,0777,true)){
                      throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                  }
              }
              $image = Image::make($img->getRealPath());
              // $image->fit(400, 400);
              $image->resize(500, 600);
              $image->save($destinationPath.'/'.$imageName);
              //original
              $destinationPath = public_path('images/topup/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $top_up->img = $imageName;
          }
          $top_up->save();
          // redirect
          return Redirect::action('Admin\TopUpController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Top Up')){
          $top_up = TopUp::findOrFail($id);
          $top_up->delete();
          return Redirect::action('Admin\TopUpController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $top_ups = TopUp::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($top_ups->currentPage()-1) * 10) + 1;
      return view('admin.top_up.index',array('top_ups'=>$top_ups,'start_page'=>$start_page));
    }
}

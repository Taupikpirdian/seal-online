<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Sponsor;
use Auth;
use View;
use Alert;
use File;
use Image;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Sponsors')){
            $sponsors = Sponsor::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($sponsors->currentPage()-1) * 10) + 1;
            return view('admin.sponsor.index',array('sponsors'=>$sponsors,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Sponsor')){
            // redirect
            $status = array(
              'Publish'     => 'Publish',
              'Draf'        => 'Draf'
            );
            return View::make('admin.sponsor.create', compact('status'));
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
        $sponsor = new Sponsor;
        $sponsor->title        = $request->title;
        $sponsor->status       = $request->status;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/sponsor/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(106, 102);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/sponsor/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $sponsor->img = $imageName;
        }
        $sponsor->save();
        // redirect
        return redirect('/sponsor/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Sponsor')){
          $sponsor = Sponsor::findOrFail($id);
          return view('admin.sponsor.show', array('sponsor' => $sponsor));
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
        if(Auth::user()->hasAnyRole('Edit Sponsor')){
          $sponsor = Sponsor::findOrFail($id);    
          $status = array(
            'Publish'     => 'Publish',
            'Draf'        => 'Draf'
          ); 
          return view('admin.sponsor.edit',compact('status'), array('sponsor' => $sponsor));
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
        if(Auth::user()->hasAnyRole('Edit Sponsor')){
          $sponsor = Sponsor::findOrFail($id);
          $sponsor->title        = $request->title;
          $sponsor->status       = $request->status;
          if ($request->img) {
              // addfoto
              $img = $request->file('img');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/sponsor/thumbs/');
              if(!File::exists($destinationPath)){
                  if(File::makeDirectory($destinationPath,0777,true)){
                      throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                  }
              }
              $image = Image::make($img->getRealPath());
              // $image->fit(400, 400);
              $image->resize(106, 102);
              $image->save($destinationPath.'/'.$imageName);
              //original
              $destinationPath = public_path('images/sponsor/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $sponsor->img = $imageName;
          }
          $sponsor->save();
          // redirect
          return Redirect::action('Admin\SponsorController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Sponsor')){
          $sponsor = Sponsor::findOrFail($id);
          $sponsor->delete();
          Alert::success('Berhasil!', 'Data telah dihapus.');
          return Redirect::action('Admin\SponsorController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          Alert::error('Error 401 !', 'Anda tidak berhak mengakses halaman ini.');
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $sponsors = Sponsor::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($sponsors->currentPage()-1) * 10) + 1;
      return view('admin.sponsor.index',array('sponsors'=>$sponsors,'start_page'=>$start_page));
    }
}

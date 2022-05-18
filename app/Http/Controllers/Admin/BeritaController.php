<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Berita;
use App\Category;
use Auth;
use View;
use Alert;
use File;
use Image;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Beritas')){
            $beritas = Berita::orderBy('created_at', 'desc')->paginate(25);
            $start_page= (($beritas->currentPage()-1) * 25) + 1;
            return view('admin.berita.index',array('beritas'=>$beritas,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Berita')){
            // redirect
            $category = Category::pluck('name','id');
            return View::make('admin.berita.create', compact('category'));
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
        // get last id
        $berita_id = Berita::pluck('id')->last();
        // last id+1
        $last_id = $berita_id + 1;
        
        $berita = new Berita;
        $berita->title        = $request->title;
        $berita->category_id  = $request->category_id;
        $berita->slug         = str_slug($berita->title).'-'.$last_id;
        $berita->user_id      = Auth::user()->id;
        $berita->desc         = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/berita/thumbs/');
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
            $destinationPath = public_path('images/berita/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $berita->img = $imageName;
        }
        $berita->save();
        // redirect
        return redirect('/berita/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Berita')){
          $berita = Berita::findOrFail($id);
          return view('admin.berita.show', array('berita' => $berita));
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
        if(Auth::user()->hasAnyRole('Edit Berita')){
          $berita = Berita::findOrFail($id);     
          $category = Category::pluck('name','id');
          return view('admin.berita.edit',compact('category'), array('berita' => $berita));
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
        if(Auth::user()->hasAnyRole('Edit Berita')){
          $berita = Berita::findOrFail($id);
          $berita->title        = $request->title;
          $berita->category_id  = $request->category_id;
          $berita->slug         = str_slug($berita->title).'-'.$berita->id;
          $berita->user_id      = Auth::user()->id;
          $berita->desc         = $request->desc;
          if ($request->img) {
              // addfoto
              $img = $request->file('img');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/berita/thumbs/');
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
              $destinationPath = public_path('images/berita/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $berita->img = $imageName;
          }
          $berita->save();
          // redirect
          Alert::success('Berhasil!', 'Data telah diupdate.');
          return Redirect::action('Admin\BeritaController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Berita')){
          $beritas = Berita::findOrFail($id);
          $beritas->delete();
          return Redirect::action('Admin\BeritaController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $beritas = Berita::where('title','LIKE','%'.$search.'%')->paginate(25);
      $start_page= (($beritas->currentPage()-1) * 10) + 1;
      return view('admin.Berita.index',array('beritas'=>$beritas,'start_page'=>$start_page));
    }
}

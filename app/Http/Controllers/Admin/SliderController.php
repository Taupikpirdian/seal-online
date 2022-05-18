<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Slider;
use App\Category;
use Auth;
use View;
use Alert;
use File;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Sliders')){
            $sliders = Slider::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($sliders->currentPage()-1) * 10) + 1;
            return view('admin.slider.index',array('sliders'=>$sliders,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Slider')){
            // redirect
            $category = Category::pluck('name','id');
            return View::make('admin.slider.create', compact('category'));
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
        $Slider = new Slider;
        $Slider->title        = $request->title;
        $Slider->category_id  = $request->category_id;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/slider/thumbs/');
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
            $destinationPath = public_path('images/slider/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $Slider->img = $imageName;
        }
        $Slider->save();
        // redirect
        return redirect('/slider/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Slider')){
          $slider = Slider::findOrFail($id);
          return view('admin.slider.show', array('slider' => $slider));
        }else{
          Alert::error('Error 401 !', 'Anda tidak berhak mengakses halaman ini.');
          return back();
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
        if(Auth::user()->hasAnyRole('Edit Slider')){
          $slider = Slider::findOrFail($id);     
          $category = Category::pluck('name','id');
          return view('admin.slider.edit',compact('category'), array('slider' => $slider));
        }else{
          Alert::error('Error 401 !', 'Anda tidak berhak mengakses halaman ini.');
          return back();
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
        if(Auth::user()->hasAnyRole('Edit Slider')){
          $Slider = Slider::findOrFail($id);
          $Slider->title        = $request->title;
          $Slider->category_id  = $request->category_id;
          if ($request->img) {
              // addfoto
              $img = $request->file('img');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/slider/thumbs/');
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
              $destinationPath = public_path('images/slider/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $Slider->img = $imageName;
          }
          $Slider->save();
          // redirect
          return Redirect::action('Admin\SliderController@index')->with(['success' => 'Data telah diubah']);
        }else{
          Alert::error('Error 401 !', 'Anda tidak berhak mengakses halaman ini.');
          return back();
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
        if(Auth::user()->hasAnyRole('Delete Slider')){
          $Slider = Slider::findOrFail($id);
          $Slider->delete();
          Alert::success('Berhasil!', 'Data telah dihapus.');
          return Redirect::action('Admin\SliderController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          Alert::error('Error 401 !', 'Anda tidak berhak mengakses halaman ini.');
          return back();
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $sliders = Slider::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($sliders->currentPage()-1) * 10) + 1;
      return view('admin.Slider.index',array('sliders'=>$sliders,'start_page'=>$start_page));
    }
}

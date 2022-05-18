<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Event;
use App\Category;
use Auth;
use View;
use Alert;
use File;
use Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Events')){
            $events = Event::orderBy('created_at', 'desc')->paginate(25);
            $start_page= (($events->currentPage()-1) * 25) + 1;
            return view('admin.event.index',array('events'=>$events,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Event')){
            // redirect
            $category = Category::pluck('name','id');
            return View::make('admin.event.create', compact('category'));
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
        $event_id = Event::pluck('id')->last();
        // last id+1
        $last_id = $event_id + 1;
        
        $event = new Event;
        $event->title        = $request->title;
        $event->category_id  = $request->category_id;
        $event->slug         = str_slug($event->title).'-'.$last_id;
        $event->user_id      = Auth::user()->id;
        $event->desc         = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/event/thumbs/');
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
            $destinationPath = public_path('images/event/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $event->img = $imageName;
        }
        $event->save();
        // redirect
        return redirect('/event/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Event')){
          $event = Event::findOrFail($id);
          return view('admin.event.show', array('event' => $event));
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
        if(Auth::user()->hasAnyRole('Edit Event')){
          $event = Event::findOrFail($id);     
          $category = Category::pluck('name','id');
          return view('admin.event.edit',compact('category'), array('event' => $event));
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
        if(Auth::user()->hasAnyRole('Edit Event')){
          $event = Event::findOrFail($id);
          $event->title        = $request->title;
          $event->category_id  = $request->category_id;
          $event->slug         = str_slug($event->title).'-'.$event->id;
          $event->user_id      = Auth::user()->id;
          $event->desc         = $request->desc;
          if ($request->img) {
              // addfoto
              $img = $request->file('img');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/event/thumbs/');
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
              $destinationPath = public_path('images/event/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $event->img = $imageName;
          }
          $event->save();
          // redirect
          return Redirect::action('Admin\EventController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Event')){
          $event = Event::findOrFail($id);
          $event->delete();
          Alert::success('Berhasil!', 'Data telah dihapus.');
          return Redirect::action('Admin\EventController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $events = Event::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($events->currentPage()-1) * 10) + 1;
      return view('admin.Event.index',array('events'=>$events,'start_page'=>$start_page));
    }
}

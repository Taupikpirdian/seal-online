<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\EventSeal;
use App\EventSealList;
use View;
use File;
use Image;
use Illuminate\Support\Str;

class EventSealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_seals = EventSeal::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.event-seal.index', compact('event_seals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.event-seal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event_seal = new EventSeal;
        $event_seal->title          = $request->title;
        $event_seal->desc           = $request->desc;
        $event_seal->slug           = Str::slug($request->title, '-').'-'.date('ymdHis');
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/event-seal/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/event-seal/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $event_seal->img = $imageName;
        }
        $event_seal->save();
        // redirect
        return redirect('/event-seal/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event_seal = EventSeal::findOrFail($id);    
        $event_seal_lists = EventSealList::where('event_seal_id', $id)->get();
        return view('admin.event-seal.show', compact('event_seal', 'event_seal_lists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event_seal = EventSeal::findOrFail($id);     
        return view('admin.event-seal.edit',compact('event_seal'));
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
        $event_seal = EventSeal::findOrFail($id);     
        $event_seal->title          = $request->title;
        $event_seal->desc           = $request->desc;
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/event-seal/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/event-seal/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $event_seal->img = $imageName;
        }
        $event_seal->save();
        // redirect
        return redirect('/event-seal/index')->with(['success' => 'Data telah di ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event_seal = EventSeal::findOrFail($id);
        $event_seal_lists = EventSealList::where('event_seal_id', $event_seal->event_seal_id)->get();
        foreach($event_seal_lists as $key=>$event_seal_list){
            $event_seal_list->delete();
        }
        $event_seal->delete();
        return Redirect::action('Admin\EventSealController@index')->with(['success' => 'Data telah dihapus']);
    }
}

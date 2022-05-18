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

class EventSealListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id = $id;
        return View::make('admin.event-seal-detail.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $event_seal_list = new EventSealList;
        $event_seal_list->event_seal_id = $id;
        $event_seal_list->title         = $request->title;
        $event_seal_list->desc          = $request->desc;
        $event_seal_list->save();
        // redirect
        return redirect('/event-seal/show/'.$id)->with(['success' => 'Data telah di tambahkan']);
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
        $event_seal_list = EventSealList::findOrFail($id);     
        $id = $event_seal_list->event_seal_id;
        return view('admin.event-seal-detail.edit',compact('event_seal_list', 'id'));
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
        $event_seal_list = EventSealList::findOrFail($id);     
        $event_seal_list->title         = $request->title;
        $event_seal_list->desc          = $request->desc;
        $event_seal_list->save();
        // redirect
        return redirect('/event-seal/show/'.$event_seal_list->event_seal_id)->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event_seal_list = EventSealList::findOrFail($id);
        $event_seal_list->delete();
        return Redirect::back()->with(['success' => 'Data telah di hapus']);
    }
}

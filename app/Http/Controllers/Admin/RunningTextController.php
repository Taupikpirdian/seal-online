<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\LineText;
use Alert;
use view;

class RunningTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $running_texts = LineText::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.running_text.index', compact('running_texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.running_text.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $running_text = new LineText;
        $running_text->title        = $request->title;
        $running_text->text         = $request->text;
        $running_text->url          = $request->url;
        $running_text->save();
        // redirect
        return Redirect::action('Admin\RunningTextController@index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $running_text = LineText::findOrFail($id);     
        return view('admin.running_text.edit', compact('running_text'));
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
        $running_text = LineText::findOrFail($id);     
        $running_text->title        = $request->title;
        $running_text->text         = $request->text;
        $running_text->url          = $request->url;
        $running_text->save();
        // redirect
        return Redirect::action('Admin\RunningTextController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $running_text = LineText::findOrFail($id);
        $running_text->delete();
        return Redirect::action('Admin\RunningTextController@index')->with(['success' => 'Data telah dihapus']);
    }
}

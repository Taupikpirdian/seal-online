<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EmotikonContent;
use View;
use Illuminate\Support\Facades\Redirect;

class EmotikonContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emotikons   = EmotikonContent::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.emotikon-content.index', compact('emotikons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.emotikon-content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new EmotikonContent;
        $data->desc         = $request->desc;
        $data->save();
        return redirect('/emotikon-content/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = EmotikonContent::findOrFail($id);
        return view('admin.emotikon-content.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = EmotikonContent::findOrFail($id);     
        return view('admin.emotikon-content.edit', $data, compact('data'));
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
        $data = EmotikonContent::findOrFail($id);
        $data->desc         = $request->desc;
        $data->save();
        // redirect
        return Redirect::action('Admin\EmotikonContentController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = EmotikonContent::findOrFail($id);
        $data->delete();
        return Redirect::action('Admin\EmotikonContentController@index')->with(['success' => 'Data telah dihapus']);
    }
}

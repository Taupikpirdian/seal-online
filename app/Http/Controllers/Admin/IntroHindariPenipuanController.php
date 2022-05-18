<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\IntroHindariPenipuan;
use View;
use Illuminate\Support\Facades\Redirect;

class IntroHindariPenipuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // code
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.intro-hindari-penipuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hindari_penipuan = new IntroHindariPenipuan;
        $hindari_penipuan->title          = $request->title;
        $hindari_penipuan->desc           = $request->desc;
        $hindari_penipuan->save();
        // redirect
        return redirect('/hindari-penipuan/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hindari_penipuan = IntroHindariPenipuan::findOrFail($id);
        return view('admin.intro-hindari-penipuan.show', array('hindari_penipuan' => $hindari_penipuan));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hindari_penipuan = IntroHindariPenipuan::findOrFail($id);     
        return view('admin.intro-hindari-penipuan.edit',compact('hindari_penipuan'));
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
        $hindari_penipuan = IntroHindariPenipuan::findOrFail($id);   
        $hindari_penipuan->title          = $request->title;
        $hindari_penipuan->desc           = $request->desc;
        $hindari_penipuan->save();
        // redirect
        return redirect('/hindari-penipuan/index')->with(['success' => 'Data telah di ubah']);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hindari_penipuan = IntroHindariPenipuan::findOrFail($id);
        $hindari_penipuan->delete();
        return Redirect::action('Admin\HindariPenipuanController@index')->with(['success' => 'Data telah dihapus']);
    }
}

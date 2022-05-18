<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Persetujuan;
use Auth;
use View;
use Alert;
use Illuminate\Support\Facades\Redirect;

class PersetujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persetujuans = Persetujuan::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.persetujuan.index', compact('persetujuans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.persetujuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persetujuan = new Persetujuan;
        $persetujuan->title          = $request->title;
        $persetujuan->desc           = $request->desc;
        $persetujuan->save();
        // redirect
        return redirect('/persetujuan/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persetujuan = Persetujuan::findOrFail($id);
        return view('admin.persetujuan.show', array('persetujuan' => $persetujuan));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persetujuan = Persetujuan::findOrFail($id);     
        return view('admin.persetujuan.edit',compact('persetujuan'));
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
        $persetujuan = Persetujuan::findOrFail($id);   
        $persetujuan->title          = $request->title;
        $persetujuan->desc           = $request->desc;
        $persetujuan->save();
        // redirect
        return redirect('/persetujuan/index')->with(['success' => 'Data telah di ubah']);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persetujuan = Persetujuan::findOrFail($id);
        $persetujuan->delete();
        return Redirect::action('Admin\PersetujuanController@index')->with(['success' => 'Data telah dihapus']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Refine;
use View;
use Illuminate\Support\Facades\Redirect;

class RefineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros         = Refine::where('type', 'intro')->paginate(25);
        $refine_risks   = Refine::where('type', 'risk')->paginate(25);
        $refine_returns = Refine::where('type', 'return')->paginate(25);
        return view('admin.refine.index', compact('intros', 'refine_risks', 'refine_returns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Intro Refine';
        $data['type']  = 'intro';
        return View::make('admin.refine.create', $data);
    }

    public function createRisk()
    {
        $data['title'] = 'Resiko Pembuatan';
        $data['type']  = 'risk';
        return View::make('admin.refine.create', $data);
    }

    public function createReturn()
    {
        $data['title'] = 'Hasil Refine';
        $data['type']  = 'return';
        return View::make('admin.refine.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Refine;
        $data->desc         = $request->desc;
        $data->type         = $request->type;
        $data->save();
        return redirect('/refine/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Refine::findOrFail($id);
        return view('admin.refine.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Intro Refine';
        $data['type']  = 'intro';
        $intro = Refine::findOrFail($id);     
        return view('admin.refine.edit', $data, compact('intro'));
    }

    public function editRisk($id)
    {
        $data['title'] = 'Resiko Pembuatan';
        $data['type']  = 'risk';
        $intro = Refine::findOrFail($id);     
        return view('admin.refine.edit', $data, compact('intro'));
    }

    public function editReturn($id)
    {
        $data['title'] = 'Hasil Refine';
        $data['type']  = 'return';
        $intro = Refine::findOrFail($id);     
        return view('admin.refine.edit', $data, compact('intro'));
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
        $data = Refine::findOrFail($id);
        $data->desc         = $request->desc;
        $data->save();
        // redirect
        return Redirect::action('Admin\RefineController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Refine::findOrFail($id);
        $data->delete();
        return Redirect::action('Admin\RefineController@index')->with(['success' => 'Data telah dihapus']);
    }
}

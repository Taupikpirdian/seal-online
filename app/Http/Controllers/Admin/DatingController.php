<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\IntroTakeGift;
use App\DatingGift;
use View;
use Illuminate\Support\Facades\Redirect;

class DatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros         = IntroTakeGift::where('type', 'intro')->paginate(25);
        $take_gifts     = IntroTakeGift::where('type', 'take')->paginate(25);
        $dating_gifts   = DatingGift::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.dating.index', compact('intros', 'take_gifts', 'dating_gifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Intro Pacaran";
        $type  = "intro";
        return View::make('admin.dating.create', compact('title', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intro = new IntroTakeGift;
        $intro->desc         = $request->desc;
        $intro->type         = $request->type;
        $intro->save();
        return redirect('/dating/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = 'Hadiah Pacaran';
        $dating = DatingGift::findOrFail($id);
        return view('admin.dating.show', $data, compact('dating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Intro Pacaran";
        $intro = IntroTakeGift::findOrFail($id);     
        return view('admin.dating.edit',compact('intro', 'title'));
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
        $intro = IntroTakeGift::findOrFail($id);
        $intro->desc         = $request->desc;
        $intro->save();
        // redirect
        return Redirect::action('Admin\DatingController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intro = IntroTakeGift::findOrFail($id);
        $intro->delete();
        return Redirect::action('Admin\DatingController@index')->with(['success' => 'Data telah dihapus']);
    }

    public function createGift()
    {
        $title = "Mengambil Hadiah";
        $type  = "take";
        return View::make('admin.dating.create', compact('title', 'type'));
    }

    public function createDating()
    {
        $data['title'] = 'Hadiah Pacaran';
        return View::make('admin.dating.create-dating', $data);
    }

    public function storeDating(Request $request)
    {
        $dating = new DatingGift;
        $dating->title        = $request->title;
        $dating->desc         = $request->desc;
        $dating->save();
        return redirect('/dating/index')->with(['success' => 'Data telah di tambahkan']);
    }

    public function editDating($id)
    {
        $data['title'] = 'Hadiah Pacaran';
        $dating = DatingGift::findOrFail($id);     
        return view('admin.dating.edit-dating', $data, compact('dating'));
    }

    public function updateDating(Request $request, $id)
    {
        $dating = DatingGift::findOrFail($id);     
        $dating->title        = $request->title;
        $dating->desc         = $request->desc;
        $dating->save();
        // redirect
        return Redirect::action('Admin\DatingController@index')->with(['success' => 'Data telah diubah']);
    }

    public function destroyDating($id)
    {
        $dating = DatingGift::findOrFail($id);
        $dating->delete();
        return Redirect::action('Admin\DatingController@index')->with(['success' => 'Data telah dihapus']);
    }

}

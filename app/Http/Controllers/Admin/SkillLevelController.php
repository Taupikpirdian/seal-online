<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skill;
use App\SkillLevel;
use View;

class SkillLevelController extends Controller
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
        return View::make('admin.skill-level.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $skill_level = new SkillLevel;
        $skill_level->skill_id       = $id;
        $skill_level->lv             = $request->lv;
        $skill_level->skill_point    = $request->skill_point;
        $skill_level->atk            = $request->atk;
        $skill_level->pemakaian_ap   = $request->pemakaian_ap;
        $skill_level->jarak          = $request->jarak;
        $skill_level->save();
        // redirect
        return redirect('/skill/show/'.$id)->with(['success' => 'Data telah di tambahkan']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill_level = SkillLevel::findOrFail($id);
        $skill_level->delete();

        return Redirect::back()->with(['success' => 'Data telah di hapus']);
    }
}

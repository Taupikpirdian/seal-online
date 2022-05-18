<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Rule;
use Auth;
use View;
use Alert;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Rules')){
            $rules = Rule::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($rules->currentPage()-1) * 10) + 1;
            return view('admin.rules.index',array('rules'=>$rules,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Rule')){
            // redirect
            return View::make('admin.rules.create');
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
        $rule = new Rule;
        $rule->title        = $request->title;
        $rule->desc         = $request->desc;
        $rule->save();
        // redirect
        return redirect('/rules/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Rule')){
          $rule = Rule::findOrFail($id);
          return view('admin.rules.show', array('rule' => $rule));
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
        if(Auth::user()->hasAnyRole('Edit Rule')){
          $rule = Rule::findOrFail($id);     
          return view('admin.rules.edit', array('rule' => $rule));
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
        if(Auth::user()->hasAnyRole('Edit Rule')){
          $rule = Rule::findOrFail($id);
          $rule->title        = $request->title;
          $rule->desc         = $request->desc;
          $rule->save();
          // redirect
          return Redirect::action('Admin\RuleController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Rule')){
          $rule = Rule::findOrFail($id);
          $rule->delete();
          return Redirect::action('Admin\RuleController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $rules = Rule::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($rules->currentPage()-1) * 10) + 1;
      return view('admin.rules.index',array('rules'=>$rules,'start_page'=>$start_page));
    }
}

<?php

namespace App\Http\Controllers\admin;
use View;
use Auth;
use DB;
use Alert;
use App\Group;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
class GroupController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  
	public function index()
  {
    if(Auth::user()->hasAnyRole('List Groups')){
      $groups = Group::orderBy('created_at', 'desc')->paginate(10);
      $start_page= (($groups->currentPage()-1) * 10) + 1;

      return view('admin.groups.index',array('groups'=>$groups,'start_page'=>$start_page));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  } 

	public function create()
  {
    if(Auth::user()->hasAnyRole('Create Group')){
      return View::make('admin.groups.create');
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function store(Request $request)
  {
    if(Auth::user()->hasAnyRole('Create Group')){
      $this->validate($request,[
        'name' =>'required|unique:groups,name',
      ]);
      // store
      $group = new Group;
      $group ->name = $request->name;
      $group ->save();
      
      // redirect
      return Redirect::action('Admin\GroupController@index')->with(['success' => 'Data telah di tambahkan']);
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function show($id)
  {
    if(Auth::user()->hasAnyRole('Details Group')){
      $group = Group::findOrFail($id);
      return view('admin.groups.show', array('group' => $group));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function edit($id)
  {
    if(Auth::user()->hasAnyRole('Edit Group')){
      $group = Group::findOrFail($id);     
      return view('admin.groups.edit', array('group' => $group));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function update(Request $request, $id)
  {
    if(Auth::user()->hasAnyRole('Edit Group')){
      $this->validate($request,[
        'name' =>'required|unique:groups,name',
      ]);
      
      $group = Group::findOrFail($id);
      $group ->name = $request->name;
      $group ->save();
      
      // redirect=
      return Redirect::action('Admin\GroupController@index')->with(['success' => 'Data telah diubah']);
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function destroy($id)
  {
    if(Auth::user()->hasAnyRole('Delete Group')){
  	  $group = Group::findOrFail($id);
      $group_role = $group->groupRole;
      if(!$group_role->isEmpty()){
        return Redirect::action('Admin\GroupController@index')->with(['error' => 'The group can not be removed because used in group roles']);  
      }else{
        $group->delete();

        // redirect
        Alert::success('Berhasil!', 'Group telah diupdate.');
        return Redirect::action('Admin\GroupController@index')->with('success','Data berhasil dihapus');
      }
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function search(Request $request){
    $search = $request->get('search');
    $groups = Group::where('name','LIKE','%'.$search.'%')->paginate(10);
    $start_page= (($groups->currentPage()-1) * 10) + 1;

    return view('admin.groups.index',array('groups'=>$groups,'start_page'=>$start_page));
  }
}

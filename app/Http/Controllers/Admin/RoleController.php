<?php

namespace App\Http\Controllers\admin;

use View;
use Auth;
use DB;
Use Alert;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
	public function index()
  {
    if(Auth::user()->hasAnyRole('List Roles')){
      $roles = Role::orderBy('created_at', 'desc')->paginate(10);
      $start_page= (($roles->currentPage()-1) * 10) + 1;
      return view('admin.roles.index',array('roles'=>$roles,'start_page'=>$start_page));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  } 

	public function create()
  {
    if(Auth::user()->hasAnyRole('Create Role')){
      return View::make('admin.roles.create');
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function store(Request $request)
  {
    if(Auth::user()->hasAnyRole('Create Role')){
      $this->validate($request,[
            'name'           =>'required|unique:roles,name',
            ]);

      // store
      $role = new Role;
      $role ->name = $request->name;
      $role ->save();
      
      // redirect with alert
      return Redirect::action('Admin\RoleController@index')->with(['success' => 'Data telah di tambahkan']);
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function show($id)
  {
    if(Auth::user()->hasAnyRole('Details Role')){
      $role = Role::findOrFail($id);
      return view('admin.roles.show', array('role' => $role));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function edit($id)
  {
    if(Auth::user()->hasAnyRole('Edit Role')){
      $role = Role::findOrFail($id);     
      return view('admin.roles.edit', array('role' => $role));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function update(Request $request, $id)
  {
    if(Auth::user()->hasAnyRole('Edit Role')){
      $this->validate($request,[
            'name'           =>'required|unique:roles,name',
            ]);
      $role = Role::findOrFail($id);
      $role ->name          = $request->name;
      $role ->save();
      
      // redirect
      return Redirect::action('Admin\RoleController@index')->with(['success' => 'Data telah diubah']);
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function destroy($id)
  {
    if(Auth::user()->hasAnyRole('Delete Role')){
  	  $role = Role::findOrFail($id);
  	  $grouprole = $role->groupRole;
      if(!$grouprole->isEmpty()){
          return Redirect::action('Admin\RoleController@index')->with('error','The role can not be removed because used in group roles.');  
      }else{
          $role->delete();
          Alert::success('Berhasil!', 'Role telah dihapus.');
          return Redirect::action('Admin\RoleController@index')->with(['success' => 'Data telah dihapus']);
      }
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function search(Request $request)
  {
    $search = $request->get('search');
    $roles = Role::where('name','LIKE','%'.$search.'%')->paginate(10);
    $start_page= (($roles->currentPage()-1) * 10) + 1;

    return view('admin.roles.index', compact('roles','start_page'));
  }
}

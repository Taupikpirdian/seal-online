<?php

namespace App\Http\Controllers\admin;
use View;
use Auth;
use DB;
use Alert;
use App\User;
use App\Group;
use App\UserGroup;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
class UserGroupController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
	public function index()
  {
    if(Auth::user()->hasAnyRole('List User Groups')){
      $user_groups = UserGroup::orderBy('created_at', 'desc')->paginate(10);
      $start_page= (($user_groups->currentPage()-1) * 10) + 1;
      return view('admin.usergroups.index',array('user_groups'=>$user_groups,'start_page'=>$start_page));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  } 

	public function create()
  {
    if(Auth::user()->hasAnyRole('Create User Group')){
      $users = User::pluck('name','id');
      $users->prepend('',0);
      $groups = Group::pluck('name','id');
      $groups->prepend('',0);
      return View::make('admin.usergroups.create', array('users' => $users, 'groups' => $groups ));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function store(Request $request)
  {
    if(Auth::user()->hasAnyRole('Create User Group')){
      $this->validate($request,[
        'user_id' =>'required|not_in:0',
        'group_id' =>'required|not_in:0',
      ]);

      // store
      $user_group = new UserGroup;
      $user_group ->user_id   = $request->user_id;
      $user_group ->group_id   = $request->group_id;
      $user_group ->save();
      
      // redirect
      return Redirect::action('Admin\UserGroupController@index')->with(['success' => 'Data telah di tambahkan']);
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function show($id)
  {
    if(Auth::user()->hasAnyRole('Details User Group')){
      $user_group = UserGroup::findOrFail($id);
      return view('admin.usergroups.show', array('user_group' => $user_group));
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function edit($id)
  {

    if(Auth::user()->hasAnyRole('Edit User Group')){
      $user_group = UserGroup::find($id);
      if ($user_group) {
        $users = User::pluck('name','id');
        $groups = Group::pluck('name','id');
        return view('admin.usergroups.edit', array('user_group' => $user_group, 'users' => $users, 'groups' => $groups));
      }else{
        Alert::error('Error', 'User group tidak ditemukan.');
        return back();
      }
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function update(Request $request, $id)
  {
    if(Auth::user()->hasAnyRole('Edit User Group')){
      $this->validate($request,[
        'user_id'           =>'required|not_in:0',
        'group_id'           =>'required|not_in:0',
      ]);
      $user_group = UserGroup::findOrFail($id);
      $user_group->user_id          = $request->user_id;
      $user_group->group_id          = $request->group_id;
      $user_group->save();
      
      // redirect
      return Redirect::action('Admin\UserGroupController@index')->with(['success' => 'Data telah diubah']);
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }
  
  public function destroy($id)
  {
    if(Auth::user()->hasAnyRole('Delete User Group')){
      $user_group = UserGroup::findOrFail($id);
      $user_group->delete();
      
      // redirect
  	  return Redirect::action('Admin\UserGroupController@index')->with(['success' => 'Data telah dihapus']);
    }else{
      return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
    }
  }

  public function search(Request $request){
      $search = $request->get('search');
      $user_groups = UserGroup::join('users', 'users.id', '=', 'user_groups.user_id')
                    ->join('groups', 'groups.id', '=', 'user_groups.group_id')
                    ->where("users.name", "like", '%'.$search.'%')
                    ->orWhere("groups.name", "like", "%".$search."%")->paginate(10);
      
      $start_page= (($user_groups->currentPage()-1) * 10) + 1;
      return view('admin.usergroups.index',array('user_groups'=>$user_groups,'start_page'=>$start_page));
  }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Group;
use App\User;
use Auth;
use View;
use Alert;
use DB;
use File;
use Image;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Users')){
            $users = User::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($users->currentPage()-1) * 10) + 1;
            return view('admin.users.index',array('users'=>$users,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create User')){
            $groups = Group::pluck('name','id');
            $groups->prepend('',0);
            
            // redirect
            return View::make('admin.users.create', array('groups' => $groups ));
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
        $validatedData = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'group_id' => ['required', 'min:0', 'not_in:0'],
        ]);
        $user = new User;
        if ($request->profile_picture) {
            $image = $request->file('profile_picture');
            $user_name = str_replace(' ', '', $request->nama);
            $user_name = strtolower($user_name);
            $rand_name = rand(10000000, 99999999);
	        $imageName = $user_name.'_'.$rand_name.'.'.$image->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/user_profiles/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
                $image = Image::make($image->getRealPath());
                $image->resize(220, 220);
                $image->save($destinationPath.'/'.$imageName);

            //original
            $destinationPath = public_path('images/user_profiles');
            $image = Image::make($image)->encode('jpg', 50);
            $image->save($destinationPath.'/'.$imageName);
            //save data image to db
            $user->profile_picture = $imageName;
        }
        $group  = Group::whereId($request->group_id)->first();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->username = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->groups()->attach($group);
        // redirect
        return redirect('/user/index')->with(['success' => 'Data telah di tambahkan']);
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
        if(Auth::user()->hasAnyRole('Edit User')){
            $user = User::whereId($id)->first();

            return View::make('admin.users.edit', array('user' => $user));
        }else{
            return response ("ERROR PERMISSIONS", 401);
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
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
        
        $user = User::whereId($id)->first();
        if ($user->email != $request->email) {
            $validatedData = $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }

        if ($request->profile_picture) {
            $image = $request->file('profile_picture');
            $user_name = str_replace(' ', '', $request->nama);
            $user_name = strtolower($user_name);
            $rand_name = rand(10000000, 99999999);
	        $imageName = $user_name.'_'.$rand_name.'.'.$image->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/user_profiles/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
                $image = Image::make($image->getRealPath());
                // $image->fit(200, 200);
                $image->resize(220, 220);
                $image->save($destinationPath.'/'.$imageName);

            //original
            $destinationPath = public_path('images/user_profiles');
            $image = Image::make($image)->encode('jpg', 50);
            $image->save($destinationPath.'/'.$imageName);
            //save data image to db
            $user->profile_picture = $imageName;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->update();

        // redirect
        return redirect('/user/index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

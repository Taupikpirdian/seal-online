<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Forum;
use Auth;
use View;
use Image;
use File;
use Alert;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Forums')){
            $forums = Forum::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($forums->currentPage()-1) * 10) + 1;
            return view('admin.forum.index',array('forums'=>$forums,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Forum')){
            // redirect
            return View::make('admin.forum.create');
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
        $forum = new Forum;
        $forum->name        = $request->name;
        $forum->desc        = $request->desc;
        $forum->link        = $request->link;
        $forum->color       = $request->color;
        if ($request->icon) {
            // addfoto
            $img = $request->file('icon');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/forum/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(500, 600);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/forum/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $forum->icon = $imageName;
        }
        $forum->save();
        // redirect
        return redirect('/forum/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Forum')){
          $forum = Forum::findOrFail($id);
          return view('admin.forum.show', array('forum' => $forum));
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
        if(Auth::user()->hasAnyRole('Edit Forum')){
          $forum = Forum::findOrFail($id);     
          return view('admin.forum.edit', array('forum' => $forum));
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
        if(Auth::user()->hasAnyRole('Edit Forum')){
          $forum = Forum::findOrFail($id);
          $forum->name        = $request->name;
          $forum->desc        = $request->desc;
          $forum->link        = $request->link;
          $forum->color       = $request->color;
          if ($request->icon) {
              // addfoto
              $img = $request->file('icon');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/forum/thumbs/');
              if(!File::exists($destinationPath)){
                  if(File::makeDirectory($destinationPath,0777,true)){
                      throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                  }
              }
              $image = Image::make($img->getRealPath());
              // $image->fit(400, 400);
              $image->resize(500, 600);
              $image->save($destinationPath.'/'.$imageName);
              //original
              $destinationPath = public_path('images/forum/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $forum->icon = $imageName;
          }
          $forum->save();
          // redirect
          return Redirect::action('Admin\ForumController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Forum')){
          $forum = Forum::findOrFail($id);
          $forum->delete();
          Alert::success('Berhasil!', 'Data telah dihapus.');
          return Redirect::action('Admin\ForumController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $forums = Forum::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($forums->currentPage()-1) * 10) + 1;
      return view('admin.forum.index',array('forums'=>$forums,'start_page'=>$start_page));
    }
}

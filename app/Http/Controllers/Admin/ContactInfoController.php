<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\ContactInfo;
use Auth;
use View;
use Alert;
use File;
use Image;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Contact Infos')){
            $contact_infos = ContactInfo::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($contact_infos->currentPage()-1) * 10) + 1;
            return view('admin.contact_info.index',array('contact_infos'=>$contact_infos,'start_page'=>$start_page));
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
        if(Auth::user()->hasAnyRole('Create Contact Info')){
            // redirect
            return View::make('admin.contact_info.create');
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
        $contact_info = new ContactInfo;
        $contact_info->title          = $request->title;
        $contact_info->tag_line       = $request->tag_line;
        $contact_info->contact_info   = $request->contact_info;
        $contact_info->detail_classes = $request->detail_classes;
        $contact_info->link_forum     = $request->link_forum;
        $contact_info->email          = $request->email;
        $contact_info->copyright      = $request->copyright;
        if ($request->logo) {
            // addfoto
            $img = $request->file('logo');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/contact_info/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(52, 40);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/contact_info/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $contact_info->logo = $imageName;
        }
        $contact_info->save();
        // redirect
        return redirect('/contact-info/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Contact Info')){
          $contact_info = ContactInfo::findOrFail($id);
          return view('admin.contact_info.show', array('contact_info' => $contact_info));
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
        if(Auth::user()->hasAnyRole('Edit Contact Info')){
          $contact_info = ContactInfo::findOrFail($id);     
          return view('admin.contact_info.edit', array('contact_info' => $contact_info));
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
        if(Auth::user()->hasAnyRole('Edit Contact Info')){
          $contact_info = ContactInfo::findOrFail($id);
          $contact_info->title          = $request->title;
          $contact_info->tag_line       = $request->tag_line;
          $contact_info->contact_info   = $request->contact_info;
          $contact_info->detail_classes = $request->detail_classes;
          $contact_info->link_forum     = $request->link_forum;
          $contact_info->email          = $request->email;
          $contact_info->copyright      = $request->copyright;

          if ($request->logo) {
              // addfoto
              $img = $request->file('logo');
              $imageName = time().'.'.$img->getClientOriginalExtension();
              //thumbs
              $destinationPath = public_path('images/contact_info/thumbs/');
              if(!File::exists($destinationPath)){
                  if(File::makeDirectory($destinationPath,0777,true)){
                      throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                  }
              }
              $image = Image::make($img->getRealPath());
              // $image->fit(400, 400);
              $image->resize(52, 40);
              $image->save($destinationPath.'/'.$imageName);
              //original
              $destinationPath = public_path('images/contact_info/');
              $img = Image::make($img)->encode('jpg', 50);
              $img->save($destinationPath.'/'.$imageName);
              //save data image to db
              $contact_info->logo = $imageName;
          }
          $contact_info->save();
          // redirect
          return Redirect::action('Admin\ContactInfoController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Contact Info')){
          $contact_info = ContactInfo::findOrFail($id);
          $contact_info->delete();
          Alert::success('Berhasil!', 'Data telah dihapus.');
          return Redirect::action('Admin\ContactInfoController@index')->with('flash-success','The data has been deleted.');
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $contact_infos = ContactInfo::where('title','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($contact_infos->currentPage()-1) * 10) + 1;
      return view('admin.contact_info.index',array('contact_infos'=>$contact_infos,'start_page'=>$start_page));
    }
}

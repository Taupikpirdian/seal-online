<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Komik;
use App\KomikPage;
use View;
use File;
use Image;

class KomikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komiks = Komik::orderBy('created_at', 'desc')->paginate(25);
        foreach($komiks as $komik){
            $count_page = KomikPage::where('komik_id', $komik->id)->count();
            $komik->count_page = $count_page;
        }
        return view('admin.komik.index', compact('komiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.komik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $komik = new Komik;
        $komik->title          = $request->title;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/komik/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/komik/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $komik->cover = $imageName;
        }
        $komik->save();
        // redirect
        return redirect('/komik/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_komiks = KomikPage::where('komik_id', $id)->get();
        $komik = Komik::findOrFail($id);    
        return view('admin.komik.show', compact('komik', 'page_komiks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komik = Komik::findOrFail($id);    
        return view('admin.komik.edit',compact('komik'));
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
        $komik = Komik::findOrFail($id);  
        $komik->title          = $request->title;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/komik/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/komik/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $komik->cover = $imageName;
        }
        $komik->save();
        // redirect
        return redirect('/komik/index')->with(['success' => 'Data telah di ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page_komiks = KomikPage::where('komik_id', $id)->get();
        foreach($page_komiks as $page_komik){
            $page_komik->delete();
        }
        $komik = Komik::findOrFail($id);
        $komik->delete();
        return Redirect::action('Admin\KomikController@index')->with(['success' => 'Data telah dihapus']);
    }

    public function createPage($id)
    {
        $id = $id;
        return View::make('admin.komik.page-create', compact('id'));
    }

    public function storePage(Request $request, $id)
    {
        $komik_page = new KomikPage;
        $komik_page->komik_id      = $id;
        $komik_page->page          = $request->page;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/komik-page/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/komik-page/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $komik_page->img = $imageName;
        }
        $komik_page->save();
        // redirect
        return redirect('/komik/show/'.$id)->with(['success' => 'Data telah di tambahkan']);
    }

    public function destroyPage($id)
    {
        $komik_page = KomikPage::findOrFail($id);
        $komik_page->delete();

        return Redirect::back()->with(['success' => 'Data telah di hapus']);
    }
}

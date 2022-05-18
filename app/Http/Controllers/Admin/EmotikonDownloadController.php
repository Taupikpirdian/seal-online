<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EmoticonDownload;
use View;
use Illuminate\Support\Facades\Redirect;
use File;
use Image;

class EmotikonDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emotikon_downloads = EmoticonDownload::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.emotikon-download.index', compact('emotikon_downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.emotikon-download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emotikon_download = new EmoticonDownload;

        if ($request->img) {
            // get size
            $size = $request->file('img')->getSize()/1000;
            // extention
            $extension = $request->file('img')->extension();
            // original name
            $original_name = $request->file('img')->getClientOriginalName();
            // addfoto
            $img = $request->file('img');
            $imageName = time().'-'.$original_name;
            //thumbs
            $destinationPath = public_path('images/emotikon/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img->move($destinationPath, $imageName);
            //save data image to db
            $emotikon_download->img         = $imageName;
            $emotikon_download->format      = $extension;
            $emotikon_download->size        = $size;
        }


        if ($request->zip) {
            $file = $request->file('zip');
            // nama file original
            $origin         = $file->getClientOriginalName();
            // ekstensi file
            $extentionFile  = $file->getClientOriginalExtension();
            // real path
            $fileRealPath   = $file->getRealPath();
            // ukuran file
            $sizeFile       = $file->getSize();
            // tipe mime
            $mimeType       = $file->getMimeType();
            
            // get size
            $size = $request->file('zip')->getSize()/1000;
            // extention
            $extension = $request->file('zip')->extension();
            // original name
            $original_name = $request->file('zip')->getClientOriginalName();
            // addzip
            $zip = $request->file('zip');
            $fileName = time().'-'.$original_name;
            //thumbs
            $tujuan_upload = public_path('images/emotikon/zip/');
            if(!File::exists($tujuan_upload)){
                if(File::makeDirectory($tujuan_upload,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $zip->move($tujuan_upload, $fileName);
            //save data zip to db
            $emotikon_download->zip_file    = $fileName;
            $emotikon_download->format      = $extension;
            $emotikon_download->size        = $size;
        }

        $emotikon_download->title          = $request->title;
        $emotikon_download->desc           = $request->desc;
        $emotikon_download->save();
        // redirect
        return redirect('/emotikon-download/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emotikon_download = EmoticonDownload::findOrFail($id);
        return view('admin.emotikon-download.show', array('emotikon_download' => $emotikon_download));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emotikon_download = EmoticonDownload::findOrFail($id);     
        return view('admin.emotikon-download.edit',compact('emotikon_download'));
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
        $emotikon_download = EmoticonDownload::findOrFail($id);   
        if ($request->img) {
            // get size
            $size = $request->file('img')->getSize()/1000;
            // extention
            $extension = $request->file('img')->extension();
            // original name
            $original_name = $request->file('img')->getClientOriginalName();
            // addfoto
            $img = $request->file('img');
            $imageName = time().'-'.$original_name;
            //thumbs
            $destinationPath = public_path('images/emotikon/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //save data image to db
            $emotikon_download->img         = $imageName;
            $emotikon_download->format      = $extension;
            $emotikon_download->size        = $size;
        }

        $emotikon_download->title          = $request->title;
        $emotikon_download->desc           = $request->desc;
        $emotikon_download->save();
        // redirect
        return redirect('/emotikon-download/index')->with(['success' => 'Data telah di ubah']);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emotikon_download = EmoticonDownload::findOrFail($id);
        $emotikon_download->delete();
        return Redirect::action('Admin\EmotikonDownloadController@index')->with(['success' => 'Data telah dihapus']);
    }
}

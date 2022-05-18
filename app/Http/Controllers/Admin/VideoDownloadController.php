<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VideoDownload;
use View;
use Illuminate\Support\Facades\Redirect;
use File;
use Image;

class VideoDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video_downloads = VideoDownload::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.video-download.index', compact('video_downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.video-download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video_download = new VideoDownload;
        $video_download->title          = $request->title;
        $video_download->desc           = $request->desc;
        $video_download->video_name     = $request->video_name;
        $video_download->url            = $request->url;
        $video_download->size           = $request->size;
        $video_download->save();
        // redirect
        return redirect('/video-download/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video_download = VideoDownload::findOrFail($id);
        return view('admin.video-download.show', array('video_download' => $video_download));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video_download = VideoDownload::findOrFail($id);     
        return view('admin.video-download.edit',compact('video_download'));
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
        $video_download = VideoDownload::findOrFail($id);   
        $video_download->title          = $request->title;
        $video_download->desc           = $request->desc;
        $video_download->video_name     = $request->video_name;
        $video_download->url            = $request->url;
        $video_download->size           = $request->size;
        $video_download->save();
        // redirect
        return redirect('/video-download/index')->with(['success' => 'Data telah di ubah']);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video_download = VideoDownload::findOrFail($id);
        $video_download->delete();
        return Redirect::action('Admin\EmotikonDownloadController@index')->with(['success' => 'Data telah dihapus']);
    }
}

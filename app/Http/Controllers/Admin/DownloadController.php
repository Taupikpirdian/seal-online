<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Download;
use App\PartDownload;
use Auth;
use View;
use Alert;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasAnyRole('List Downloads')){
            $downloads = Download::orderBy('created_at', 'desc')->paginate(10);
            $start_page= (($downloads->currentPage()-1) * 10) + 1;
            $datas = PartDownload::orderBy('created_at', 'desc')->paginate(25);
            return view('admin.download.index',array('downloads'=>$downloads,'start_page'=>$start_page,'datas'=>$datas));
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
        if(Auth::user()->hasAnyRole('Create Download')){
            // redirect
            return View::make('admin.download.create');
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
        $download = new Download;
        $download->title        = $request->title;
        $download->desc         = $request->desc;
        $download->link         = $request->link;
        $download->save();
        // redirect
        return redirect('/download/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->hasAnyRole('Details Download')){
          $download = Download::findOrFail($id);
          return view('admin.download.show', array('download' => $download));
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
        if(Auth::user()->hasAnyRole('Edit Download')){
          $download = Download::findOrFail($id);     
          return view('admin.download.edit', array('download' => $download));
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
        if(Auth::user()->hasAnyRole('Edit Download')){
          $download = Download::findOrFail($id);
          $download->title        = $request->title;
          $download->desc         = $request->desc;
          $download->link         = $request->link;
          $download->save();
          // redirect
          return Redirect::action('Admin\DownloadController@index')->with(['success' => 'Data telah diubah']);
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
        if(Auth::user()->hasAnyRole('Delete Download')){
          $download = Download::findOrFail($id);
          $download->delete();
          Alert::success('Berhasil!', 'Data telah dihapus.');
          return Redirect::action('Admin\DownloadController@index')->with(['success' => 'Data telah dihapus']);
        }else{
          return back()->with(['error' => 'Anda tidak berhak mengakses halaman ini']);
        }
    }

    public function search(Request $request){
      $search = $request->get('search');
      $downloads = Download::where('desc','LIKE','%'.$search.'%')->paginate(10);
      $start_page= (($downloads->currentPage()-1) * 10) + 1;
      return view('admin.download.index',array('downloads'=>$downloads,'start_page'=>$start_page));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\SetupIntro;
use App\PartDownload;
use App\Download;
use App\Gallery;
use App\EmoticonDownload;
use App\VideoDownload;
use Auth;
use Response;

class DownloadController extends Controller
{
    public function downloadGame()
    {
        $setup = SetupIntro::orderBy('created_at', 'desc')->first();
        if($setup){
            if($setup->status == "maintenance"){
                return Redirect::action('HomeController@maintenance');
            }
        }
        
        $data = Download::orderBy('created_at', 'desc')->first();
        $user  = Auth::guard(getGuard())->user();
        $part_downloads = PartDownload::orderBy('part', 'asc')->get();
        return view('landing.DownloadGame.Game', compact('data', 'part_downloads'));
    }

    public function downloadEmotikon()
    {
        $emotikon_downloads = EmoticonDownload::orderBy('created_at', 'desc')->paginate(25);
        return view('landing.DownloadGame.emotikon', compact('emotikon_downloads'));
    }

    public function downloadEmotikonFile($id)
    {
        $filepath = public_path('images/emotikon/zip/').$id;
        return Response::download($filepath);
    }

    public function downloadVideo()
    {
        $video_downloads = VideoDownload::orderBy('created_at', 'desc')->paginate(25);
        return view('landing.DownloadGame.video', compact('video_downloads'));
    }
    
    public function downloadGallery()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(25);
        return view('landing.DownloadGame.gallery', compact('galleries'));
    }

    public function downloadImage800($id)
    {
        $filepath = public_path('images/gallery/800/').$id;
        return Response::download($filepath);
    }

    public function downloadImage1024($id)
    {
        $filepath = public_path('images/gallery/1024/').$id;
        return Response::download($filepath);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\SetupIntro;
use Auth;
use View;
use Alert;
use File;
use Image;

class SetupWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setups = SetupIntro::orderBy('created_at', 'desc')->paginate(25);
        $countData = SetupIntro::count();
        return view('admin.setup.index', compact('setups', 'countData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setup = new SetupIntro;

        if ($request->img_up) {
            // addfoto
            $img_up = $request->file('img_up');
            $imageName = time().'.'.$img_up->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/setup/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_up->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/setup/');
            $img_up = Image::make($img_up)->encode('jpg', 50);
            $img_up->save($destinationPath.'/'.$imageName);
            //save data image to db
            $setup->img_up = $imageName;
        }

        if ($request->img_maintenance) {
            // addfoto
            $img_maintenance = $request->file('img_maintenance');
            $imageName = time().'.'.$img_maintenance->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/setup/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_maintenance->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/setup/');
            $img_maintenance = Image::make($img_maintenance)->encode('jpg', 50);
            $img_maintenance->save($destinationPath.'/'.$imageName);
            //save data image to db
            $setup->img_maintenance = $imageName;
        }

        if ($request->background) {
            // addfoto
            $background = $request->file('background');
            $imageName = time().'.'.$background->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/setup/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($background->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/setup/');
            $background = Image::make($background)->encode('jpg', 50);
            $background->save($destinationPath.'/'.$imageName);
            //save data image to db
            $setup->background = $imageName;
        }

        $setup->status                  = $request->status;
        $setup->save();
        // redirect
        return Redirect::action('Admin\SetupWebController@index')->with(['success' => 'Data telah di tambahkan']);
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
        $setup = SetupIntro::findOrFail($id);     
        return view('admin.setup.edit', compact('setup'));
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
        $setup = SetupIntro::findOrFail($id);

        if ($request->img_up) {
            // addfoto
            $img_up = $request->file('img_up');
            $imageName = time().'.'.$img_up->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/setup/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_up->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/setup/');
            $img_up = Image::make($img_up)->encode('jpg', 50);
            $img_up->save($destinationPath.'/'.$imageName);
            //save data image to db
            $setup->img_up = $imageName;
        }

        if ($request->img_maintenance) {
            // addfoto
            $img_maintenance = $request->file('img_maintenance');
            $imageName = time().'.'.$img_maintenance->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/setup/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img_maintenance->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/setup/');
            $img_maintenance = Image::make($img_maintenance)->encode('jpg', 50);
            $img_maintenance->save($destinationPath.'/'.$imageName);
            //save data image to db
            $setup->img_maintenance = $imageName;
        }

        if ($request->background) {
            // addfoto
            $background = $request->file('background');
            $imageName = time().'.'.$background->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/setup/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($background->getRealPath());
            // $image->fit(400, 400);
            $image->resize(250, 250);
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/setup/');
            $background = Image::make($background)->encode('jpg', 50);
            $background->save($destinationPath.'/'.$imageName);
            //save data image to db
            $setup->background = $imageName;
        }

        $setup->status     = $request->status;
        $setup->save();

        return Redirect::action('Admin\SetupWebController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setup = SetupIntro::findOrFail($id);
        $setup->delete();
        return Redirect::action('Admin\SetupWebController@index')->with(['success' => 'Data telah dihapus']);
    }
}

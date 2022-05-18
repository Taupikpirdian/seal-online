<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UpdateSealPart;
use Auth;
use View;
use Alert;
use File;
use Image;
use Validator;
use Illuminate\Support\Facades\Redirect;

class UpdateSealPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCarnivalCity()
    {
        $title  = "Carnival City";
        $url    = "/update-seal-carnival-city/create";
        $datas  = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 0)->paginate(25);
        $sub_category = [
            '0'    => 'Profesi Baru', 
            '1'    => 'Peta Baru', 
            '2'    => 'Guardian', 
            '3'    => 'PVP', 
            '4'    => 'Item Baru', 
            '5'    => 'Skill Baru', 
            '6'    => 'Intro',
        ];
        return view('admin.update-seal-part.index', compact('datas', 'title', 'url', 'sub_category'));
    }

    public function indexGuildWars()
    {
        $title = "Guild Wars";
        $url    = "/update-seal-guild-wars/create";
        $datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 1)->paginate(25);
        $sub_category = [
            '0'    => 'Guild Vs Guild', 
            '1'    => 'Peta Baru', 
            '2'    => 'Monster Baru', 
            '3'    => 'Armor Baru', 
            '4'    => 'Quest Baru', 
            '6'    => 'Intro',
        ];
        return view('admin.update-seal-part.index', compact('datas', 'title', 'url', 'sub_category'));
    }

    public function indexService()
    {
        $title = "Service";
        $url    = "/update-seal-service/create";
        $datas = UpdateSealPart::orderBy('created_at', 'desc')->where('category', 2)->paginate(25);
        $sub_category = [
            '0'    => 'Peta Baru', 
            '1'    => 'Monster Baru', 
            '2'    => 'Armor Baru', 
            '3'    => 'NPC Baru', 
            '4'    => 'Status Item', 
            '6'    => 'Intro',
        ];
        return view('admin.update-seal-part.index', compact('datas', 'title', 'url', 'sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCarnivalCity()
    {
        $title  = "Carnival City";
        $category = '0';
        $url    = "/update-seal-carnival-city/index";
        $sub_category = [
            '6'    => 'Intro',
            '0'    => 'Profesi Baru', 
            '1'    => 'Peta Baru', 
            '2'    => 'Guardian', 
            '3'    => 'PVP', 
            '4'    => 'Item Baru', 
            '5'    => 'Skill Baru',
        ];

        return View::make('admin.update-seal-part.create', compact('category', 'title', 'url', 'sub_category'));
    }

    public function createGuildWars()
    {
        $title = "Guild Wars";
        $category = '1';
        $url    = "/update-seal-guild-wars/index";
        $sub_category = [
            '0'    => 'Guild Vs Guild', 
            '1'    => 'Peta Baru', 
            '2'    => 'Monster Baru', 
            '3'    => 'Armor Baru', 
            '4'    => 'Quest Baru', 
            '6'    => 'Intro',
        ];
        return View::make('admin.update-seal-part.create', compact('category', 'title', 'url', 'sub_category'));
    }

    public function createService()
    {
        $title = "Service";
        $category = '2';
        $url    = "/update-seal-service/index";
        $sub_category = [
            '0'    => 'Peta Baru', 
            '1'    => 'Monster Baru', 
            '2'    => 'Armor Baru', 
            '3'    => 'NPC Baru', 
            '4'    => 'Status Item', 
            '6'    => 'Intro',
        ];
        return View::make('admin.update-seal-part.create', compact('category', 'title', 'url', 'sub_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $rules = [
            'title'   => 'required',
            'desc'    => 'required',
        ];

        $this->validate($request, $rules);

        $data = new UpdateSealPart;

        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/update-part/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/update-part/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $data->img = $imageName;
        }

        $data->title           = $request->title;
        $data->desc            = $request->desc;
        $data->category        = $request->category;
        $data->sub_category    = $request->sub_category;
        $data->save();
        // redirect
        if($request->category == 0){
            return Redirect::action('Admin\UpdateSealPartController@indexCarnivalCity')->with(['success' => 'Data telah di tambahkan']);
        }elseif($request->category == 1){
            return Redirect::action('Admin\UpdateSealPartController@indexGuildWars')->with(['success' => 'Data telah di tambahkan']);
        }else{
            return Redirect::action('Admin\UpdateSealPartController@indexService')->with(['success' => 'Data telah di tambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = UpdateSealPart::findOrFail($id);
        if($data->category == 0){
            $sub_category = [
                '6'    => 'Intro',
                '0'    => 'Profesi Baru', 
                '1'    => 'Peta Baru', 
                '2'    => 'Guardian', 
                '3'    => 'PVP', 
                '4'    => 'Item Baru', 
                '5'    => 'Skill Baru', 
            ];
            $title  = "Carnival City";
        }elseif($data->category == 1){
            $sub_category = [
                '6'    => 'Intro',
                '0'    => 'Guild Vs Guild', 
                '1'    => 'Peta Baru', 
                '2'    => 'Monster Baru', 
                '3'    => 'Armor Baru', 
                '4'    => 'Quest Baru', 
            ];
            $title = "Guild Wars";
        }else{
            $sub_category = [
                '6'    => 'Intro',
                '0'    => 'Peta Baru', 
                '1'    => 'Monster Baru', 
                '2'    => 'Armor Baru', 
                '3'    => 'NPC Baru', 
                '4'    => 'Status Item', 
            ];
            $title = "Service";
        }
        return view('admin.update-seal-part.show', array('data' => $data, 'sub_category' => $sub_category));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = UpdateSealPart::findOrFail($id);
        if($data->category == 0){
            $url    = "/update-seal-carnival-city/index";

            $sub_category = [
                '6'    => 'Intro',
                '0'    => 'Profesi Baru', 
                '1'    => 'Peta Baru', 
                '2'    => 'Guardian', 
                '3'    => 'PVP', 
                '4'    => 'Item Baru', 
                '5'    => 'Skill Baru', 
            ];
            $title  = "Carnival City";
        }elseif($data->category == 1){
            $url    = "/update-seal-guild-wars/index";

            $sub_category = [
                '0'    => 'Guild Vs Guild', 
                '1'    => 'Peta Baru', 
                '2'    => 'Monster Baru', 
                '3'    => 'Armor Baru', 
                '4'    => 'Quest Baru', 
                '6'    => 'Intro',
            ];
            $title = "Guild Wars";
        }else{
            $url    = "/update-seal-guild-wars/index";
            $sub_category = [
                '0'    => 'Peta Baru', 
                '1'    => 'Monster Baru', 
                '2'    => 'Armor Baru', 
                '3'    => 'NPC Baru', 
                '4'    => 'Status Item', 
                '6'    => 'Intro',
            ];
            $title = "Service";
        }
        return view('admin.update-seal-part.edit', compact('data', 'url', 'sub_category', 'title'));
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
        // validasi
        $rules = [
            'title'   => 'required',
            'desc'    => 'required',
        ];

        $this->validate($request, $rules);
        
        $data = UpdateSealPart::findOrFail($id);
        if ($request->img) {
            // addfoto
            $img = $request->file('img');
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/update-part/thumbs/');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $image = Image::make($img->getRealPath());
            $image->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/update-part/');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $data->img = $imageName;
        }

        $data->title           = $request->title;
        $data->desc            = $request->desc;
        $data->sub_category    = $request->sub_category;
        $data->save();
        // redirect
        Alert::success('Berhasil!', 'Data telah diubah.');
        if($data->category == 0){
            return Redirect::action('Admin\UpdateSealPartController@indexCarnivalCity')->with(['success' => 'Data telah diubah']);
        }elseif($data->category == 1){
            return Redirect::action('Admin\UpdateSealPartController@indexGuildWars')->with(['success' => 'Data telah diubah']);
        }else{
            return Redirect::action('Admin\UpdateSealPartController@indexService')->with(['success' => 'Data telah diubah']);
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
        $data = UpdateSealPart::findOrFail($id);
        $data->delete();
        return Redirect::back()->with(['success' => 'Data telah dihapus']);
    }
}

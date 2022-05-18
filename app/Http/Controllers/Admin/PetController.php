<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pet;
use View;
use Illuminate\Support\Facades\Redirect;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet_intros   = Pet::orderBy('created_at', 'desc')->where('type', 'intro')->paginate(25);
        $pet_seeds    = Pet::orderBy('created_at', 'desc')->where('type', 'seed')->paginate(25);
        $pet_piyas    = Pet::orderBy('created_at', 'desc')->where('type', 'piya')->paginate(25);
        $pet_birds    = Pet::orderBy('created_at', 'desc')->where('type', 'bird')->paginate(25);
        $pet_heavens  = Pet::orderBy('created_at', 'desc')->where('type', 'heaven')->paginate(25);
        return view('admin.pet.index', compact('pet_intros', 'pet_seeds', 'pet_piyas', 'pet_birds', 'pet_heavens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Intro Pet';
        $data['type']  = 'intro';
        return View::make('admin.pet.create', $data);
    }

    public function createSeed()
    {
        $data['title'] = 'Pet Seed';
        $data['type']  = 'seed';
        return View::make('admin.pet.create', $data);
    }

    public function createPiya()
    {
        $data['title'] = 'Pet Piya';
        $data['type']  = 'piya';
        return View::make('admin.pet.create', $data);
    }

    public function createBird()
    {
        $data['title'] = 'Pet Bird';
        $data['type']  = 'bird';
        return View::make('admin.pet.create', $data);
    }

    public function createHeaven()
    {
        $data['title'] = 'Pet Heaven';
        $data['type']  = 'heaven';
        return View::make('admin.pet.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pet;
        $data->desc         = $request->desc;
        $data->type         = $request->type;
        $data->save();
        return redirect('/pet/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pet::findOrFail($id);
        return view('admin.pet.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Intro Pet';
        $pet = Pet::findOrFail($id);     
        return view('admin.pet.edit', $data, compact('pet'));
    }

    public function editSeed($id)
    {
        $data['title'] = 'Pet Seed';
        $pet = Pet::findOrFail($id);     
        return view('admin.pet.edit', $data, compact('pet'));
    }

    public function editPiya($id)
    {
        $data['title'] = 'Pet Piya';
        $pet = Pet::findOrFail($id);     
        return view('admin.pet.edit', $data, compact('pet'));
    }

    public function editBird($id)
    {
        $data['title'] = 'Pet Bird';
        $pet = Pet::findOrFail($id);     
        return view('admin.pet.edit', $data, compact('pet'));
    }

    public function editHeaven($id)
    {
        $data['title'] = 'Pet Heaven';
        $pet = Pet::findOrFail($id);     
        return view('admin.pet.edit', $data, compact('pet'));
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
        $pet = Pet::findOrFail($id);
        $pet->desc         = $request->desc;
        $pet->save();
        // redirect
        return Redirect::action('Admin\PetController@index')->with(['success' => 'Data telah diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pet::findOrFail($id);
        $data->delete();
        return Redirect::action('Admin\PetController@index')->with(['success' => 'Data telah dihapus']);
    }
}

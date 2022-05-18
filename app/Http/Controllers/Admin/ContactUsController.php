<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactUs;
use Auth;
use View;
use Alert;
use Illuminate\Support\Facades\Redirect;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_us_datas = ContactUs::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.contact-us.index', compact('contact_us_datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('admin.contact-us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact_us = new ContactUs;
        $contact_us->title          = $request->title;
        $contact_us->contact_info   = $request->contact_info;
        $contact_us->desc           = $request->desc;
        $contact_us->save();
        // redirect
        return redirect('/contact-us/index')->with(['success' => 'Data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact_us = ContactUs::findOrFail($id);
        return view('admin.contact-us.show', array('contact_us' => $contact_us));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_us = ContactUs::findOrFail($id);     
        return view('admin.contact-us.edit',compact('contact_us'));
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
        $contact_us = ContactUs::findOrFail($id);   
        $contact_us->title          = $request->title;
        $contact_us->contact_info   = $request->contact_info;
        $contact_us->desc           = $request->desc;
        $contact_us->save();
        // redirect
        return redirect('/contact-us/index')->with(['success' => 'Data telah di ubah']);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact_us = ContactUs::findOrFail($id);
        $contact_us->delete();
        return Redirect::action('Admin\ContactUsController@index')->with(['success' => 'Data telah dihapus']);
    }
}

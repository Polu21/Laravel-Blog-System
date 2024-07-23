<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('components/frontend/dashboard', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function store_contact(Request $request)
    // {
    //     $this->validate(request(), [
    //         'name'      => 'required',
    //         'company'   => 'required',
    //         'email'     => 'required|email',
    //         'phone_no'  => 'required|max:12',
    //         'website'   => 'required',
    //         'message'   => 'required'
    //     ]);
    //     dd($request);
    //     //$validated_data = $request->validate();
    //     $contact = new Contact;
    //     $contact->name = $request->input('name');
    //     $contact->company = $request->input('company');
    //     $contact->email = $request->input('email');
    //     $contact->phone_no = $request->input('phone_no');
    //     $contact->website = $request->input('website');
    //     $contact->message = $request->input('message');
    //     $contact->save();
    //     // Contact::create([
    //     //     'name'         => $request['name'],
    //     //     'company'      => $request['company'],
    //     //     'email'        => $request['email'],
    //     //     'phone_no'     => $request['phone_no'],
    //     //     'website'      => $request['website'],
    //     //     'message'      => $request['message']
    //     // ]);

    //     return redirect()->to('frontend.index');
    // }
}

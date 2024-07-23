<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages/contact');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'      => 'required',
            'company'   => 'required',
            'email'     => 'required|email',
            'phone_no'  => 'required|max:12',
            'website'   => 'required',
            'message'   => 'required'
        ]);
        dd($request);
        //$validated_data = $request->validate();
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->company = $request->input('company');
        $contact->email = $request->input('email');
        $contact->phone_no = $request->input('phone_no');
        $contact->website = $request->input('website');
        $contact->message = $request->input('message');
        $contact->save();
        // Contact::create([
        //     'name'         => $request['name'],
        //     'company'      => $request['company'],
        //     'email'        => $request['email'],
        //     'phone_no'     => $request['phone_no'],
        //     'website'      => $request['website'],
        //     'message'      => $request['message']
        // ]);

        return redirect()->to('frontend.index');
    }
}

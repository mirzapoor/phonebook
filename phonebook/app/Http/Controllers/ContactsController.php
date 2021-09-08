<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts =\DB::table('contacts')->get();

        return view('contact.contacts',compact('contacts'));
    }

    public function store(Contact $contacts,Request $request)
    {
        $contacts->create($request->all());
        return  back();
    }

    public function insert(Contact $contacts)
    {
        return view('contact.insert',compact('contacts'));
    }


    

    public function edit(Contact $contacts)
    {
        return view('contact.edit',compact('contacts'));
    }

    public function update(Contact $contacts,Request   $request)
    {
        $contacts->update($request->all());
        return back();
      }
}

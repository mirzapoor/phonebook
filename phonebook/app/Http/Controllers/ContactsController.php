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

    public function store(Request $request,Contact $contact)
    {

        $contact->create($request->all());
        return back();

    }

    public function show(Contact $contact)
    {
        // $users=User::find($id);
        return view('contact.contacts',compact( 'contact'));
    }

    // public function edit(Contact $contacts)
    // {
    //     return view('contact.edit',compact('contact'));
    // }

    // public function update(Contact $contacts,Request   $request)
    // {
    //     $note->update($request->all());
    //     return back();
    //   }
}

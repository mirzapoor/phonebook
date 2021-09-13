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
    public function destroy($contacts) {
        \DB::delete('delete from contacts where id = ?',[$contacts]);
        return  back();

     }

    public function store(Contact $contacts,Request $request)
    {
        $this->validate($request,[
            'mobile' => 'required|min:11',
            'email' =>'email',

        ]);
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

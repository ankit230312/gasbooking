<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // public function index(){
    //     return view("admin.contact");
    // }

    public function index()
    {
        $contacts = Contact::first();       
        return view('admin.contact', compact('contacts'));
    }

   

    public function store(Request $request)
    {
        $contact = Contact::first(); 
        if ($contact) {
           
            $contact->update($request->all());
        } else {
            
            Contact::create($request->all());
        }
        return redirect()->route('contacts.index')->with('success', 'Contact saved successfully!');
    }

   

   

   
}

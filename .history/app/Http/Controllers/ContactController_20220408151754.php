<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest as RequestsContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(RequestsContactRequest $req){
    
        $contact = new Contact();
        $contact->name=$req->input('name');
        $contact->email=$req->input('emaill');
        $contact->name=$req->input('name');
        $contact->name=$req->input('name');


    }
    
}

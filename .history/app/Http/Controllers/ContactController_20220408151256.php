<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest as RequestsContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(RequestsContactRequest $req){
    
        // $valitation = $req->validate([
        //     'name'=> 'required|min:5|max:50',
        //     'email'=> 'email:rfc,dns',
        //     'message'=> 'required|min:5|max:50'
        // ]);

    }
}

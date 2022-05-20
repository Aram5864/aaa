<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App\http\Req

class ContactController extends Controller
{
    public function submit(Request $data){
    
        // $valitation = $data->validate([
        //     'name'=> 'required|min:5|max:50',
        //     'email'=> 'email:rfc,dns',
        //     'message'=> 'required|min:5|max:50'
        // ]);

    }
}

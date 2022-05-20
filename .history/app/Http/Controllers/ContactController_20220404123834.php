<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $data){
    
        $valitation = $data->validate([
            'name'=> 'required|min:5'
        ]);

      dd($data->input('name'));
    }
}

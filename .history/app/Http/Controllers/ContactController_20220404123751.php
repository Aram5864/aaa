<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $data){
    
        $valitation = $data->validate()

      dd($data->input('name'));
    }
}

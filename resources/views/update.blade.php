@extends('layouts.app')

@section('title')
    Contact Page
@endsection

@section('content')



    
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <form action="{{ route('contact-update-fin', $data->id) }}" method="POST">
                @csrf
                <div class="flex-rev">
                    <input type="text" placeholder="Connor Gaunt" value="{{ $data->name }}" name="name" id="name" />
                    <label for="name">Full Name</label>
                </div>
                <div class="flex-rev">
                    <input type="email" value="{{ $data->email }}" placeholder="connor@connorgaunt.com" name="email" id="email" />
                    <label for="email">Your Email</label>
                </div>
                <div class="flex-rev">
                    <textarea  name="message" >{{ $data->message }}</textarea>
                    <label for="message">Email Message</label>
                </div>
                <button type="submit">Update Message</button>
            </form>
       
        </div>
    </div>
</div>
              
      
@endsection

@extends('layouts.app')

@section('title')
    Contact Page
@endsection

@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li class="alert alert-danger">
                    {{ $error }}hgjghjghj
                </li>
            @endforeach

        </ul>
    @endif

    
<div class="container">
    <div class="row">
        <div class="col-sm-7">

        </div>
    </div>
</div>
              
      
@endsection

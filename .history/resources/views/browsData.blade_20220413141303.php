@extends('layouts.app')

@section('title')
   message - {{ $data->name }}
@endsection

@section('content')

<div class="big_box d-flex justify-content-center">
  <div class="card" style="width: 18rem;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDvxvHOia3SjNoEBRjps58_sqpdXHtrgRgiA&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $data->name }}</h5>
      <p class="card-text">{{ $data->email }}</p>
      <a href="{{#}}" class="btn btn-primary">Update</a>
    </div>
</div>
</div>


@endsection


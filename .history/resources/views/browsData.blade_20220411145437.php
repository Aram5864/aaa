@extends('layouts.app')

@section('title')
    {{  }}
@endsection

@section('content')

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $data->name }}</h5>
      <p class="card-text">{{ $data->email }}</p>
      <a href="#" class="btn btn-primary">Update</a>
    </div>
</div>

@endsection
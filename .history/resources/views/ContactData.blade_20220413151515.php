@extends('layouts.app')

@section('title')
    Contact Data
@endsection

@section('content')
    <table class="table table-success">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Email</th>
                <th scope="col">Create-Data</th>
                <th scope="col">Updated-Data</th>
                <th scope="col"></th>
            </tr>
        </thead>

        @foreach ($data as $value)
            <tbody>
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>{{ $value->updated_at }}</td>
                    <td>
                        <a href="{{ route('contact-data-one',$value->id) }}" class="btn btn-info">
                            Browse
                        </a>
                    </td>
                </tr>
            </tbody>
        @endforeach

    </table>
@endsection
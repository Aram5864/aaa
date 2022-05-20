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
            </tr>
        </thead>

        @foreach ($data as $value)
            <tbody>
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>
                        <button class="btn btn-success">
                            Click
                        </button>
                    </td>
                </tr>
            </tbody>
        @endforeach

    </table>
@endsection

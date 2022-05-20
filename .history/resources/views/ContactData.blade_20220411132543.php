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
                <th scope="col">Handle</th>
            </tr>
        </thead>

        @foreach ($data as $value)
            <tbody>
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        @endforeach

    </table>
@endsection

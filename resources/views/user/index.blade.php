@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles}}</td>
                <td><a href="">Permission</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

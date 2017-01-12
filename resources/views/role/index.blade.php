@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->role_name }}</td>
                <td>{{ $role->created_at->diffForHumans()}}</td>
                <td><a href="{{ route('role.permissions', $role->id) }}">Permission</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Role: {{ $role->role_name }}</h1>
    <br>
    <h3>Permissions</h3>
    <ul>
        @foreach($permissions as $permission)
            <li><input type="checkbox" {{ in_array($permission->name, $rolePermissions) ? " checked" : '' }}> {{ $permission->permission_name }}</li>
        @endforeach
    </ul>
    {{-- <table class="table table-bordered">
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
                <td><a href="{{ route('role.permissions', $role->id) }}">Permission</a> fdgdfg</td>
            </tr>
        @endforeach
        </tbody>
    </table> --}}
</div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(User $user)
    {
    	return view('permission.index', compact('user'));
    }

    public function getRoles()
    {
    	$roles = Role::all();
    	return view('role.index', compact('roles'));
    }
}

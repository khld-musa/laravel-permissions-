<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

use App\Request\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ProfileUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->except(Auth::id());
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
       return view('admin.users.edit', compact('user', 'roles'));
    }
    
    public function update(ProfileUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return to_route('admin.users.index');
    }

    
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('admin.users.index');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;

use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->orderBy('id')->get();

        return view('admin.roles.index', compact('roles'));
    }
    public function create()
    {
       return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        Log::channel('myDailyLog')->info('create role request:'.json_encode($request->all()));
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);
        return to_route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
       return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($validated);
        return to_route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        Log::channel('myDailyLog')->info('delete role request');
        $role->delete();
        return to_route('admin.roles.index');
    }

    public function assignPermissions(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permissions);
        return back();
    }

}

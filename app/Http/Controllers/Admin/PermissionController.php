<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;

use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
       return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        Log::channel('myDailyLog')->info('create permission request:'.json_encode($request->all()));
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Permission::create($validated);
        return to_route('admin.permissions.index');
    }

    public function edit(Permission $permission)
    {
       return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $permission->update($validated);
        return to_route('admin.permissions.index');
    }

    public function destroy( Permission $permission)
    {
        Log::channel('myDailyLog')->info('delete permission request');
        $permission->delete();
        return to_route('admin.permissions.index');
    }

}

<x-admin-layout>
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-slate-50 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">

                    <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">

                        <div>
                            <form method="POST" class="space-y-5" action="{{ route('admin.roles.update', $role->id) }}">
                                @csrf
                                @method('PUT')
                                <div>
                                    <label for="name" class="text-xl pb-3">Name</label>

                                    <input type="text" name="name" value="{{ $role->name }}"
                                    class=" text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                    @error('name')
                                        <span class="text-sm text-red-400">{{ $message }}</span>
                                    @enderror
                                    <div class="flex items-center justify-start mt-4">


                                        <button type="submit"
                                           class="float-right w-70 inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xm ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-slate-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <hr>

                    <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">
                        <div class="flex m-2 p-2">
                            <h1></h1>
                            <div class="max-w-md mx-auto">
                                @foreach ($role->permissions as $rp)
                                    <span class="m-2 p-2 bg-indigo-300 rounded-md">
                                        {{ $rp->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <form method="POST" class="space-y-5"
                                action="{{ route('admin.roles.permissions', $role->id) }}">
                                @csrf
                                @method('POST')
                                <div>
                                    <label class="text-xl" style="max-width: 300px">
                                        <div class="flex-auto p-4">
                                        <span class="text-gray-700 ">
                                            Permissions
                                        </span>
                                        </div>

                                        <select
                                            class="block w-full py-3 px-3 mt-1yyy text-gray-800 appearance-none border-2 border-gray-100 focus:text-gray-500 focus-outline-none focus:border-gray-200 rounded-md"
                                            multiple name="permissions[]">
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}" @selected($role->hasPermission($permission->name))>
                                                    {{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                    <div class="flex items-center justify-start mt-4">


                                        <button type="submit"
                                           class="float-right inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xm ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-slate-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Assign
                                            Permission</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>
</x-admin-layout>

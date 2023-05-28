<x-admin-layout>
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div
                class="relative flex flex-col min-w-0 break-words bg-slate-50 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="mt-12 max-w-6xl mx-auto bg-slate-50 p-4 rounded">
                        <div>
                            <form method="POST" class="space-y-5" action="{{ route('admin.users.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div>
                                    <label for="name" class="text-xl">Name</label>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                        class=" text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                    @error('name')
                                        <span class="text-sm text-red-400">{{ $message }}</span>
                                    @enderror

                                    <label for="email" class="text-xl">Email</label>
                                    <input type="text" email="email" value="{{ $user->email }}"
                                        class=" text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                    @error('email')
                                        <span class="text-sm text-red-400">{{ $message }}</span>
                                    @enderror

                                    <label class="text-xl" style="max-width: 300px">
                                        <span class="text-gray-700 ">
                                            Roles
                                        </span>

                                        <select
                                            class=" text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            name="role_id">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" @selected($user->hasRole($role->name))>
                                                    {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                    <div class="flex items-center justify-start mt-4">
                                        <button type="submit"
                                            class="w-1/4 float-right w-70 inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xm ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-slate-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

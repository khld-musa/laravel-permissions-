<x-admin-layout>
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">

                    <h5 class="font-bold py-3">New permission</h5>

                    <form method="POST" class="space-y-5" action="{{ route('admin.permissions.store') }}">
                        @csrf
                        <div class="flex flex-wrap mx-30">
                            <div class="max-w-full px-3 w-full lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Permission
                                        Name
                                    </h6>

                                    <div class="mb-1">

                                        <div class="mb-1">
                                            <input type="text" name="name"
                                                class=" text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                            @error('name')
                                                <span class="text-sm text-red-400">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="flow-root">


                                <button type="submit"
                                class="float-right inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-slate-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Create</button>
                            </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    </div>
</x-admin-layout>

{{-- <x-admin-layout>
    <div class="mt-12 max-w-6xl mx-auto">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">
                                Edit
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $user->id }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $user->name }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $user->role->name }}
                            </th>
                            <td class="px-6 py-4 text-right">

                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}"
                                        onsubmit="return confirm('are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class=" text-red-600" type="submit">Delete</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout> --}}



<x-admin-layout>
    

    <div>
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Users table</h6>

                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            ID</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            User Name</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Role</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            </th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>

                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-size-sm"></h6>
                                                    <p class="mb-0 leading-tight text-size-xs text-slate-400">
                                                        {{ $user->id }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 font-semibold leading-tight text-size-xs">  {{ $user->name }}</p>
                                            
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b-0 text-size-sm whitespace-nowrap shadow-transparent">
                                            
                                            <span
                                                class="bg-gradient-slate px-3.6-em text-size-xs-em rounded-1.8 py-2.2-em inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">     {{ $user->role->name }}</span>
                                                
                                
                                            
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="font-semibold leading-tight text-size-xs text-slate-400">  <form method="POST" action="{{ route('admin.roles.destroy', $user->id) }}"
                                                    onsubmit="return confirm('are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class=" text-red-600" type="submit">Delete</button>
                                                </form></span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                                class="font-semibold leading-tight text-size-xs text-slate-400"> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-admin-layout>


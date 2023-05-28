<x-app-layout>

    <div class="mt-12 max-w-6xl mx-auto">
        @can('create', App\Models\Post::class)
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('posts.create') }}"       class="float-right inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xm ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-slate-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                    New Post
                </a>
            </div>
        @endcan
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">
                                Edit
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $post->id }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $post->title }}
                            </th>
                            <td class="px-6 py-4 text-right">
                                @can('create', App\Models\Post::class)
                                    <div class="flex space-x-2">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}"
                                            onsubmit="return confirm('are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class=" text-red-600" type="submit">Delete</button>
                                        </form>
                                    </div>
                                @endcan
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>

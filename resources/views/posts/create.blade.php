<x-app-layout>
    <div class="mt-12 w-1/2 mx-auto bg-slate-50 p-4 rounded">
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full px-3 mb-6 e">
          
                    <div class="flex-auto p-4">

                      
                            <form method="POST" class="space-y-5" action="{{ route('posts.store') }}">
                                @csrf
                                <div class="mt-4">
                                    <label for="name" class="text-xl">Title</label>

                                    <input type="text" name="title"
                                        class=" text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                    @error('title')
                                        <span class="text-sm text-red-400">{{ $message }}</span>
                                    @enderror

                                    <div class="mt-4">
                                        <label for="name" class="text-xl">Body</label>

                                        <input type="text" name="body"
                                            class=" text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                        @error('body')
                                            <span class="text-sm text-red-400">{{ $message }}</span>
                                        @enderror


                                        <div class="flex items-center justify-start mt-4">

                                        <button type="submit"
                                        class="float-right inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xm ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-slate-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Create</button>
                                    </div>
                            </form>
                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

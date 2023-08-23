<x-app-layout>
    <x-slot name="header">

        <p class="font-semibold  text-gray-800 dark:text-gray-200 leading-tight">
            <a href="add">Add Post</a>
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                        @foreach ($posts as $post )
                        <a href="post/{{$post->id}}"><div class="bg-gray-50 border border-gray-200 rounded p-6">
                                    <div>
                                        <h3 class="text-2xl">
                                            {{$post->title}}
                                        </h3>
                                        <div class="text-xl font-bold mb-4">{{$post->content}}</div>
                                    </div>
                            </div></a>
                            <br>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                        @foreach ($posts as $post )
                        <div class="bg-gray-50 border border-gray-200 rounded p-6">


                        <a href="post/{{$post['post']->id}}">
                                    <div>
                                        <h3 class="text-2xl">
                                            {{$post['post']->title}}
                                        </h3>
                                        <div class="text-xl font-bold mb-4">{{$post['post']->content}}</div>
                                    </div>

                        </a>
                        <p style="font-size: em">By: {{$post['user']->name}}</p>

                    </div>
                            <br>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

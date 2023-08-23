<x-app-layout>
    <x-slot name="header">

        <p class="font-semibold  text-gray-800 dark:text-gray-200 leading-tight">
            Search Posts
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="" method="POST">
                        @csrf <!-- {{ csrf_field() }} -->
                        <center>
                        <div class="mb-6">
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="post_content"
                                placeholder="I'm post content!"
                                style="color:black;width:95%"
                            />
                        </div>
                    </center>
                    </form>







                </div>
            </div>
        </div>
    </div>
</x-app-layout>





<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <main>
                        <div class="mx-4">
                            <div
                                class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                            >
                                <header class="text-center">
                                    <h2 class="text-2xl font-bold uppercase mb-1" style="margin: 10px">
                                        Create a Post
                                    </h2>
                                </header>

                                <form action="" method="POST">
                                    @csrf <!-- {{ csrf_field() }} -->
                                    <center>

                                    <div class="mb-6">
                                        <label
                                            for="title"
                                            class="inline-block text-lg mb-2"
                                            > Title</label
                                        ><br>
                                        <input
                                            type="text"
                                            class="border border-gray-200 rounded p-2 w-full"
                                            name="title"
                                            placeholder="I'm a title!"
                                            style="color:black;width:95%"


                                        />
                                    </div>


                                    <div class="mb-6">
                                        <label
                                            for="content"
                                            class="inline-block text-lg mb-2"
                                        >
                                            Content
                                        </label>
                                        <br>
                                        <textarea
                                            class="border border-gray-200 rounded p-2 w-full"
                                            name="content"
                                            rows="10"
                                            placeholder="I'm a content!"
                                            style="color:black;width:95%"

                                        ></textarea>
                                    </div>


                                    <div class="mb-6">
                                        <input type="submit" value="Post"></input>
                                        <a href="home" class="text-black ml-4"> Back </a>
                                    </div>
                                </center>

                                </form>
                            </div>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>





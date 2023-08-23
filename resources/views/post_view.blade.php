
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                                        <div>
                                            <h3 class="text-2xl">
                                                @php
                                                @endphp
                                                {{$postData['post']->title}}
                                            </h3>
                                            <div class="text-xl font-bold mb-4">{{$postData['post']->content}}</div>
                                        </div>
                                </div>
                                <br>
                                <div class="text-s font-bold mb-4">By: {{$postData['user']->name}}</div>
<br>


                                <form action="" method="POST">
                                    @csrf <!-- {{ csrf_field() }} -->
                                    <div class="mb-6">
                                        <input type="hidden" value="{{$postData['post']->id}}">
                                        <input
                                            type="text"
                                            class="border border-gray-200 rounded p-2  "
                                            name="content"
                                            placeholder="Add Comment"
                                            style="color:black;width:100%"

                                        />
                                    </div>
                                </form>
                                <h6>Comments</h6>
                                <br>

                                {{-- Comments --}}
                                @foreach ( $postData['comments'] as $comment )
                                <div class="bg-gray-50 border border-gray-200 rounded p-4">
                                <div class="d-flex justify-content-between py-1 pt-2">

                                    <div><span class="text3">{{$comment['comment']}}</span></div>

                                    <div><span class="text2">{{$comment['user']->name}}</span></div>
                                </div>
                                </div>
                                <br>

                                @endforeach

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>





<x-layout>
    <x-card>

        <!-- Card -->
        <div class="max-w-2xl mx-auto bg-indigo-600 shadow-lg rounded-lg">
            <div class="px-6 py-5">
                <div class="flex items-start">
                    <!-- Card content -->
                    <div class="flex-grow truncate">
                        <!-- Card header -->
                        <div class="w-full sm:flex justify-between items-center mb-3">
                            <!-- Title -->
                            <h2 class="text-2xl leading-snug font-extrabold text-gray-50 truncate mb-1 sm:mb-0">
                                {{ $post->header }}</h2>
                            <!-- Like and comment buttons -->
                            <div class="flex-shrink-0 flex items-center space-x-3 sm:ml-2">
                                <button
                                    class="flex items-center text-left text-sm font-medium text-indigo-100 hover:text-white group focus:outline-none focus-visible:border-b focus-visible:border-indigo-100">
                                    <svg class="w-4 h-4 flex-shrink-0 mr-2 fill-current text-gray-300 group-hover:text-gray-200"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7Zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8Z" />
                                    </svg>
                                    <span>{{ count($post->comments) }} <span class="sr-only">comments</span></span>
                                </button>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="flex items-end justify-between whitespace-normal">
                            <!-- Paragraph -->
                            <div class="max-w-md text-indigo-100">
                                <p class="mb-2">{{ $post->message }}</p>
                            </div>
                            <!-- More link -->
                            <p class="text-indigo-100">
                                Posted by: {{ $post->user->name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            @unless (count($post->comments) == 0)
                @foreach ($post->comments as $comment)
                    <x-comment :comment="$comment" />
                @endforeach
            @else
            @endunless
        </div>
        @if (Auth::check())
            <form method="POST" action="/comment/{{ $post->id }}" class="w-full max-w-sm ml-9">
                @csrf
                <div class="flex items-center border-b border-indigo-600 py-2">
                    <input
                        class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                        name="content" placeholder="Type comment here" aria-label="comment">
                    <button
                        class="flex-shrink-0 border-transparent border-4 text-indigo-600 hover:text-teal-800 text-sm py-1 px-2 rounded"
                        type="submit">
                        Comment
                    </button>
                </div>
            </form>
        @else
            <p class="ml-9"><a class="text-blue-500" href="/login">Log in</a> to comment</p @endif

    </x-card>
</x-layout>

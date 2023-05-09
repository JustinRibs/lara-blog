@props(['comment'])

{{-- <div class="relative block rounded-sm border-t-4 border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 mt-1 mb-2">
    <div class="flex items-center gap-4">
        <h6 class="text-xl font-bold sm:text-xl">{{ $comment->user->name }}</h6>
    </div>
    <p class="mt-4 font-medium text-gray-500">
        {{ $comment->content }}
    </p>
</div> --}}


<!-- Card -->
<div class="max-w-2xl mx-auto shadow-lg rounded-lg border border-gray-400 mt-2 mb-2 bg-white ">
    <div class="px-6 py-5">
        <div class="flex items-start">
            <!-- Card content -->
            <div class="flex-grow truncate">
                <!-- Card header -->
                <div class="w-full sm:flex justify-between items-center mb-3">
                    <!-- Title -->
                    <h2 class="text-2xl leading-snug font-extrabold text-indigo-600 truncate mb-1 sm:mb-0">
                        {{ $comment->user->name }}</h2>

                </div>
                <!-- Card body -->
                <div class="flex items-end justify-between whitespace-normal">
                    <!-- Paragraph -->
                    <div class="max-w-md text-indigo-600">
                        <p class="mb-2">{{ $comment->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

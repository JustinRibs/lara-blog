<x-layout>
    {{-- @include('partials.header') --}}
    <div class="bg-gray-300 border border-gray-200 rounded p-6">
        @if (Auth::check())
            <form method="POST" action="/posts" class="">
                @csrf
                <div class="mb-1">
                    <input name="header" type="text" placeholder="Subject/Header">
                </div>
                <div>
                    <textarea placeholder="Type Message Here" name="message" cols="30" rows="3"></textarea>

                </div>
                <div class="mb-2">
                    <button class="bg-gray-400 text-black rounded py-2 px-2 hover:bg-black hover:text-white">
                        Post
                    </button>
                </div>
            </form>
        @endif
        <h1>Blog Posts: </h1>
        <div>
            @if (count($posts) == 0)
                <p>No blog posts</p>
            @else
                @foreach ($posts as $post)
                    <x-post :post='$post' />
                @endforeach
            @endif
        </div>
    </div>


</x-layout>

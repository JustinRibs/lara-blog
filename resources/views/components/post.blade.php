@props(['post'])

<div class="relative border-blue-600 border-2 rounded-md max-w-md p-2">
    <h1><b>Header:</b> {{ $post->header }}</h1>
    <p><b>Message:</b> {{ $post->message }}</p>
    <p><b>User: {{ $post->user->name }} </b></p>
    <small>{{ \Carbon\Carbon::parse($post->created_at)->format('M j, g:i a') }}</small>

    <a href="/posts/{{ $post->id }}"
        class=" bg-blue-200 border-2 rounded-lg p-1 absolute top-0 right-0 mx-2 mt-1">Comments</a>



</div>

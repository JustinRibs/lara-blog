@props(['post'])

<div class="border-blue-600 border-2 rounded-md max-w-md p-2">
    <h1><b>Header:</b> {{ $post->header }}</h1>
    <p><b>Message:</b> {{ $post->message }}</p>
    <p><b>User</b></p>
    <small>{{ \Carbon\Carbon::parse($post->created_at)->format('M j, g:i a') }}</small>
</div>

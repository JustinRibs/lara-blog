<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
</head>

<body>
    <ul class=" relative flex justify-between mb-1">
        <li class="mr-3">
            <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white"
                href="/">Home</a>
        </li>
        @if (Auth::check())
            <li class="mr-3">
                <p>Welcome {{ auth()->user()->name }}</p>
            </li>
            <li class="mr-3">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit"
                        class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white">Logout</button>
                </form>
            </li>
        @else
            <li class="mr-3">
                <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white"
                    href="/login">Login</a>
            </li>
            <li class="mr-3">
                <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white"
                    href="/signup">Signup</a>
            </li>
        @endif

    </ul>
    <p class="border-2 border-gray-600 mb-5"></p>
    {{ $slot }}
</body>

</html>

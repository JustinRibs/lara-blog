<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <ul class=" relative flex justify-between mb-1">
        <li class="mr-3">
            <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white"
                href="/">Home</a>
        </li>
        <li class="mr-3">
            <a class="inline-block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-2 px-4"
                href="/login">Login</a>
        </li>
        <li class="mr-3">
            <a class="inline-block py-2 px-4 text-gray-400 cursor-not-allowed" href="#">Disabled Pill</a>
        </li>


    </ul>
    <p class="border-2 border-gray-600 mb-5"></p>
    {{ $slot }}
</body>

</html>

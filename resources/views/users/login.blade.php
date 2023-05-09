<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Login to get bloggin!</h2>
        </header>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>⛔️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/authenticate">
            @csrf
            <div class="mb-6">
                <label for="email">Email: </label>
                <input class="border border-gray-200 rounded p-2 w-full" type="email" name="email"
                    placeholder="johnny@aol.com">
            </div>
            <div class="mb-6">
                <label for="password">Password: </label>
                <input class="border border-gray-200 rounded p-2 w-full" type="password" name="password">
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-gray-400 rounded py-2 px-2 hover:bg-black hover:text-white">
                    Login
                </button>
            </div>
            <div>
                <p>Not registered? Sign up <a class="text-red-400" href="/signup">Here</a></p>
            </div>

        </form>
    </x-card>
</x-layout>

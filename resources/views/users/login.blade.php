<x-layout>
    <x-container>
        <!-- Header -->
        <header class="text-center">
            <h2 class="font-bold uppercase mb-1">
                Login
            </h2>
        </header>
        <!-- Form -->
        <form method="POST" action="/users/authenticate">
            @csrf
            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="inline-block text">Email</label>
                <input type="email" class="border border-gray-100 rounded p-2 w-full" name="email" value="{{old('email')}}"/>
            </div>
            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">Password</label>
                <input type="password" class="border border-gray-100 rounded p-2 w-full" name="password" value="{{old('password')}}"/>
            </div>
            <!-- Sign in Button -->
            <div class="mb-6">
                <button type="submit" class="text-black rounded py-2 px-4 hover:bg-black" style="background-color: #DDC9BC">Sign In</button>
            </div>
        </form>
    </x-container>
</x-layout>
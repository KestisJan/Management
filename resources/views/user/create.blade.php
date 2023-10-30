<x-layout>
    <!-- Container -->
    <div class="container mx-auto p-4 sm:w-1/2 md:w-1/3 lg:w-1/4">
        <!-- Header -->
        <header class="text-center">
            <h3 class="font-bold uppercase mb-1 text-2x1">Registration form</h3>
        </header>

        <form method="POST" action="/users">
            @csrf
            <!-- Name -->
            <div class="mb-2">
                <label for="name" class="inline-block text-lg mb-2"> Name</label>
                <input type="text" class="border border-gray-100 rounded p-2 w-full" name="name" value="{{old('name')}}"/>
            </div>
            <!-- Email -->
            <div class="mb-2">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-100 rounded p-2 w-full" name="email" value="{{old('email')}}">
            </div>
            <!-- Password -->
            <div class="mb-2">
                <label for="password" class="inline-block text-lg mb-2">Password</label>
                <input type="password" class="border border-gray-100 rounded p-2 w-full" name="password" value="{{old('password')}}">
            </div>
            <!-- Password confirmation -->
            <div class="mb-2">
                <label for="password2">Confirm Password</label>
                <input type="password" class="border border-gray-100 rounded p-2 w-full" name="password_confirmation" value="{{old('password_confirmation')}}">
            </div>
            <!-- Sign up button -->
            <div class="mb-2">
                <button type="submit" class="rounded-lg text-black py-2 px-4 hover:bg-green" style="background-color: #DDC9BC">Sign up</button>
            </div>
            <!-- Login link -->
            <div class="mb-2">
                <p>Already have an account?</p>
                <a href="/login" class="text-laravel">Login</a>
            </div>
        </form>
    </div>
</x-layout>
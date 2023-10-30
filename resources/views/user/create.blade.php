<x-layout>
    <header class="text-center">
        <h2 class="">Register</h2>
    </header>

    <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2"> Name</label>
            <input type="text" class="border border-gray-100 rounded p-2 w-full" name="name" value="{{old('name')}}"/>
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Email</label>
            <input type="email" class="border border-gray-100 rounded p-2 w-full" name="email" value="{{old('email')}}">
        </div>
</x-layout>
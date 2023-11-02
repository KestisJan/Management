<x-layout>
    <x-container>
        <form method="POST" action="/admin/{{ $user->id }}">
            @csrf
            @method("PUT")
            
            <input type="hidden" name="user_id" value="{{ $user->id }}">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="Role:"></label>
                <input type="text" name="role" value="{{ $user->role }}">
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </x-container>
</x-layout>
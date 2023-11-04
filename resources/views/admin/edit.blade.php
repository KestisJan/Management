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
                <label for="role">Role:</label>
                <select name="role">
                    <option value="admin {{ $user->role === 'admin' ? 'selected' : '' }}">Admin</option>
                    <option value="user {{ $user->role === 'user' ? 'selected' : '' }}">User</option>
                    <option value="editor {{ $user->role === 'editor' ? 'selected' : '' }}">Editor</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </x-container>
</x-layout>
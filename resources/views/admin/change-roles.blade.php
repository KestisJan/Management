<x-layout>
    <x-container>
        {{-- <form method="POST" action="{{ route('admin.roles.assign', ['user' => $user->id]) }}">
            @csrf
            @method('PUT')
            <label for="new_role">Select Role:</label>
            <select name="new_role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <button type="submit">Assign Role</button>
        </form> --}}
        <form method="POST" action="{{ route('admin.roles.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT') <!-- Add this line to specify the PUT method -->
            <label for="new_role">Select Role:</label>
            <select name="new_role" id="new_role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="editor">Editor</option>
                <!-- Add more role options as needed -->
            </select>
            <button type="submit">Change Role</button>
        </form>
    </x-container>
</x-layout>
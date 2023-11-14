<x-layout>
    <x-container>
        <form method="POST" action="{{ route('admin.roles.update', $user->id) }}">
            @csrf
            @method('PUT')
            <label for="new_role">Select Role:</label>
            <select name="new_role">
                @foreach ($roles as $role)
                <option value="{{ $role->name }}"> {{ $role->name }}</option>
                @endforeach
            </select>
            <button type="submit">Assign Role</button>
        </form>
    </x-container>
</x-layout>
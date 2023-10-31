<x-layout>
    <x-container>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Functions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-white">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->role }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Delete</a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-container>
</x-layout>
<x-layout>
    <x-container>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lastname</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Truck #</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Trailer #</th>
                    <th class="px-8 py-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                    <th class="px-8 py-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">About</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach($users as $user)
                <tr class="bg-white">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->role }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="/admin/{{ $user->id }}/edit" class="text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Delete</a>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <a href="/admin/roles/change/{{ $user->id }}" class="text-blue-500 hover:underline">Change</a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody> --}}
        </table>
    </x-container>
</x-layout>
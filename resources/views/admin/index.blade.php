<x-layout>
    <x-container>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Header 1</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-white">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-container>
</x-layout>
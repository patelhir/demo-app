@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Merchants List</h2>
    <div class="overflow-x-auto bg-white shadow rounded">

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($merchants as $merchant)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $merchant->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $merchant->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap"> 
                        <a href="{{ route('merchants.notes.index', $merchant->id) }}" class="text-sm text-blue-600 hover:text-blue-800 underline transition duration-150">
                            View Notes
                        </a>
                            |
                        <a href="{{ route('merchants.notes.create', ['merchant' => $merchant->id]) }}" class="text-sm text-blue-600 hover:text-blue-800 underline transition duration-150">
                            Add a Note
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
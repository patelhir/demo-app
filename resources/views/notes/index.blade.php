@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Notes</h2>
        <div class="flex gap-3">
        <a href="{{ route('merchants.notes.create', ['merchant' => $merchant->id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
            Add Note for {{$merchant->name}}
        </a>
        <a href="{{ route('merchants.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
           Return to Merchants
        </a>
        </div>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Updated on</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($notes as $note)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $note->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($note->content, 50) }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $note->updated_at->format('m/d/Y H:i') }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('notes.edit', $note) }}" class="text-sm text-blue-600 hover:text-blue-800 underline transition duration-150">Edit</a> |
                    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-error text-sm text-blue-600 hove:text-blue-600 underline transition duration-150 cursor-pointer " onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
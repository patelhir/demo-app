@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-2 pb-2">
    <h2 class="text-2xl font-semibold mb-4">Insert Note</h2>
    <form action="{{ route('notes.store', ['merchant' => request()->route('merchant')]) }}" method="POST">
        @csrf
        <!-- Content -->
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Select Merchant</label>
            <select name="merchant_id" id="merchant_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @foreach ($merchants as $merchant)
                <option value="{{$merchant->id}}">
                    {{$merchant->name}}
                    @endforeach
                </option>
        </div>
        <div class="mb-4">
            <input type="hidden" name="merchant_id1" value="{{request()->route('merchant')}}" />
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
            <textarea name="content" id="content" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required></textarea>
        </div>
        <!-- Submit -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mt-6">
                Save Note
            </button>
        </div>
    </form>
</div>
@endsection
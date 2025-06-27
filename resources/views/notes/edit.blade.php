@extends('layouts.app')

@section('content')
<div class="container mx-auto  pt-2 pb-2">
<h2 class="text-2xl font-semibold mb-4">Edit Note</h2>
    <form action="{{ route('notes.update', ['note' => $notes->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Select Merchant</label>
                <select name="merchant_id" id="merchant_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @foreach ($merchants as $merchant)
                <option value="{{$merchant->id}}" {{ $merchant->id == $selectedMerchantId ? 'selected' : '' }}>
                    {{$merchant->name}}
            @endforeach
                </option>
            </div>
        <div class="mb-4">
                <input type="hidden" name="merchant_id" value="{{request()->route('merchant')}}">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea name="content" id="content" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>{{$notes->content }}</textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                    Update Note
                </button>
            </div>
    </form>
</div>
@endsection
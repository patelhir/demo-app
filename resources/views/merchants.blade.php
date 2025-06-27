@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Merchants1</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @forelse($merchants as $merchant)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $merchant->name }}</td>
                    <td>
                        <a href="{{ route('merchants.notes.index', $merchant->id) }}">
                            View Notes
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No merchants found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
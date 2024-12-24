<!-- resources/views/items/show.blade.php -->

@extends('items.layout')

@section('content')
    <div class="container">
        <h1>Item Details</h1>
        <div class="card">
            <div class="card-header">
                Item: {{ $item->name }}
             </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $item->description }}</p>
                <p><strong>Price:</strong> ${{ $item->price }}</p>
               </div>
          </div>
        <a href="{{ route('items.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
@endsection

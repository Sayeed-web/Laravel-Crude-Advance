<!-- resources/views/items/index.blade.php -->

@extends('items.layout')

@section('content')
    <div class="container">
        <h1>Advance CRUD Razmenda</h1>
        <a href="{{ route('items.create') }}" class="btn btn-primary">Create Item</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
          <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
</tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                 <a href="{{ route('items.show', $item->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    </div>
@endsection

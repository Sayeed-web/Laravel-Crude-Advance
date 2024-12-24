
@extends('items.layout')

@section('content')
    <div class="container">
        <h1>Edit Item</h1>
        <form action="{{ route('items.update', $item->id) }}" method="POST">
          @csrf
            @method('PUT')
          <div class="form-group">
                <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}" required>
         </div>
            <div class="form-group">
               <label for="description">Description</label>
               <textarea name="description" id="description" class="form-control" required>{{ $item->description }}</textarea>
            </div>
            <div class="form-group">
           <label for="price">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $item->price }}" required>
       </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection

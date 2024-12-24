
@extends('items.layout')

@section('content')
    <div class="container">
        <h1>Create Item</h1>
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
          <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>
       <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
           </div>
          <div class="form-group">
           <label for="price">Price</label>
          <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
      </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection

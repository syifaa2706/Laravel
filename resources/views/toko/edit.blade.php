@extends('template/admin')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('produk.update', $product)  }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="makeup" id="name" class="form-control" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="120.000" id="price" class="form-control" value="{{ $product->price }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="makeup nya sangat bagus" id="description" class="form-control" value="{{ $product->description }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

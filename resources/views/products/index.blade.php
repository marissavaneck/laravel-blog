

@extends('layout')
@section('content')
    <h1>Products</h1>
    <button><a href="{{ URL::to('products/create') }}">Create a Product</a></button>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

    @endif
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Productname</th>
            <th scope="col">price</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td scope="row"><a href="{{ route('products.show', $product) }}"> {{ $product->product }}</a></td>
                <td>{{ $product->price }}</td>

                <td><a class="btn btn-danger" href="{{ url('/products/'.$product->id. '/delete') }}">Delete</a></td>

                <td> <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this Product</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
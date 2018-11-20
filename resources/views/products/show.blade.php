@extends('layout')
@section('content')
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

        <tr>
            <td>{{ $product->id }}</td>
            <td scope="row">{{ $product->product }}</td>
            <td>{{ $product->price }}</td>

            <td><a class="btn btn-danger" href="{{ url('/products/'.$product->id. '/delete') }}">Delete</a></td>

            <td> <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this Product</a></td>
        </tr>

    </tbody>
</table>

        @foreach($product->reviews as $review)
            <p>Name: {{$review->username}}</p>
            <p>Subject: {{$review->title}}</p>
            <p>Description: {{$review->body}}</p>
            <hr>
        @endforeach
    @endsection
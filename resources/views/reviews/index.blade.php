

@extends('layout')
@section('content')
    <h1>Reviews</h1>
    <button><a href="{{ URL::to('reviews/create') }}">Create a Review</a></button>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

    @endif
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">product</th>
            <th scope="col">Author</th>
            <th scope="col">Rating</th>
            <th></th>
            <th></th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
        <tr>
            <th scope="row">{{ $review->id }}</th>
            <td>{{ $review->title }}</td>
            <td>{{ $review->product->product }}</td>
            <td>{{ $review->user->name }}</td>
            <td>{{ $review->rating }}</td>
            <td></td>
            <td>

            <td><a class="btn btn-danger" href="{{ url('/reviews/'.$review->id. '/delete') }}">Delete</a></td>

            </td>
            <td><a class="btn btn-small btn-info" href="{{ url('/reviews/'.$review->id. '/edit') }}">Edit This Review</a></td>

        </tr>
      @endforeach
        </tbody>
    </table>


    @endsection
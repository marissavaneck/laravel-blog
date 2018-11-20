@extends('layout')

@section('content')
    <h1>Reviews</h1>

    <form method="post" action="{{action('ReviewController@update', $review)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
    @if($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif





    <div class="form-group">

        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $review->title, ['class' => 'form-control', 'id' => 'title']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', $review->user->name, ['class' => 'form-control', 'id' => 'username']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', $review->body, ['class' => 'form-control', 'id' => 'body']) !!}
    </div>
    <div class="form-group">

        {!! Form::label('rating', 'Rating') !!}
        {!! Form::text('rating', $review->rating, ['class' => 'form-control', 'id' => 'rating']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {!! Form::close() !!}

@endsection
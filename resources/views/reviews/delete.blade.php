@extends('layout')

@section('content')
    <h1>Reviews</h1>


        @if($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

{!! Form::open(['url' => '/reviews/'.$review->id, 'method' => 'DELETE']) !!}



        <div class="form-group">

            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', $review->title, ['class' => 'form-control', 'id' => 'title', 'disabled' => 'disabled']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('username', 'Username') !!}
            {!! Form::text('username', $review->username, ['class' => 'form-control', 'id' => 'username', 'disabled' => 'disabled']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', $review->body, ['class' => 'form-control', 'id' => 'body' , 'disabled' => 'disabled']) !!}
        </div>
        <div class="form-group">

            {!! Form::label('rating', 'Rating') !!}
            {!! Form::text('rating', $review->rating, ['class' => 'form-control', 'id' => 'rating' , 'disabled' => 'disabled']) !!}
        </div>
        <button type="submit" class="btn btn-primary">Delete</button>
    {!! Form::close() !!}

@endsection
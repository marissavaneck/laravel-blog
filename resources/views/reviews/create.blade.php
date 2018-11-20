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

@can('create reviews')
{!! Form::open(['url' => '/reviews']) !!}

    <div class="form-group">

        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', '', array_merge(['class' => 'form-control', 'id' => 'title'])) !!}
    </div>

    <div class="form-group">

        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username',  Auth::user()->name ,array_merge(['class' => 'form-control', 'id' => 'username' , 'disabled' => 'disabled'])) !!}


        {!! Form::hidden('user_id', Auth::user()->id) !!}
    </div>

<div class="form-group">



    {!! Form::select('product_id', $products, null, ['placeholder' => 'pick a product...']); !!}
</div>



    <div class="form-group">

        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', '', array_merge(['class' => 'form-control', 'id' => 'body'])) !!}
    </div>
    <div class="form-group">

        {!! Form::label('rating', 'Rating') !!}
        {!! Form::text('rating', '', array_merge(['class' => 'form-control', 'id' => 'rating'])) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}


    @endcan
 @endsection
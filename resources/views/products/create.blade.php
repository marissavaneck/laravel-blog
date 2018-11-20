
@extends('layout')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


{!! Form::open(['url' => '/products']) !!}

<div class="form-group">

    {!! Form::label('product', 'Product') !!}
    {!! Form::text('product', '', array_merge(['class' => 'form-control', 'id' => 'product'])) !!}
</div>

<div class="form-group">

    {!! Form::label('price', 'Price') !!}
    {!! Form::text('price', '', array_merge(['class' => 'form-control', 'id' => 'price'])) !!}
</div>

<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}
    @endsection
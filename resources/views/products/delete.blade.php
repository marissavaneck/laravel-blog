@extends('layout')

@section('content')
    <h1>Products</h1>


    @if($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE']) !!}



    <div class="form-group">

        {!! Form::label('product', 'Product') !!}
        {!! Form::text('product', $product->product, ['class' => 'form-control', 'id' => 'product', 'disabled' => 'disabled']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', $product->price, ['class' => 'form-control', 'id' => 'price', 'disabled' => 'disabled']) !!}
    </div>

    <button type="submit" class="btn btn-primary">Delete</button>
    {!! Form::close() !!}

@endsection
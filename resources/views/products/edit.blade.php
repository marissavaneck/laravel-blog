@extends('layout')

@section('content')
    <h1>Products</h1>

    <form method="post" action="{{action('ProductController@update', $product)}}">
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

            {!! Form::label('product', 'Product') !!}
            {!! Form::text('product', $product->product, ['class' => 'form-control', 'id' => 'product']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('price', 'Price') !!}
            {!! Form::text('price', $product->price, ['class' => 'form-control', 'id' => 'price']) !!}
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {!! Form::close() !!}

@endsection
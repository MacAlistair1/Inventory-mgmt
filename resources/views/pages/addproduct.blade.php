@extends('layouts.app')

@section('content')
@include('includes.message')
<h1>Add Product</h1>
    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
            {{ Form::label('product_name', 'Product Name') }}
            {{ Form::text('product_name', '', ['class' => 'form-control', 'placeholder' => 'Product Name']) }}
    </div>
    <div class="form-group">
            {{ Form::label('product_quantity', 'Product Quantity') }}
            {{ Form::text('product_quantity', '', ['class' => 'form-control', 'placeholder' => 'Product Quantity']) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}   

    {!! Form::close() !!}
@endsection
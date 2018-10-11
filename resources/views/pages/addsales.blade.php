@extends('layouts.app')

@section('content')
@include('includes.message')
<h1>Add  Sales Product</h1>
    {!! Form::open(['action' => 'SalesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
            {{ Form::label('product_name', 'Product:') }}
            {!! Form::select('product_name',$products, '', ['class' => 'btn']) !!}
    </div>
    <div class="form-group">
            {{ Form::label('sales_rate', 'Sales Rate') }}
            {{ Form::text('sales_rate', '', ['class' => 'form-control', 'placeholder' => 'Sales Rate']) }}
    </div>
    <div class="form-group">
            {{ Form::label('sales_quantity', 'Sales Quantity') }}
            {{ Form::text('sales_quantity', '', ['class' => 'form-control', 'placeholder' => 'Sales Quantity']) }}
    </div>
    <div class="form-group">
            {{ Form::label('paid_amount', 'Paid Amount') }}
            {{ Form::text('paid_amount', '', ['class' => 'form-control', 'placeholder' => 'Paid Amount']) }}
    </div>
    <div class="form-group">
            {{ Form::label('customer_name', 'Customer Name') }}
            {{ Form::text('customer_name', '', ['class' => 'form-control', 'placeholder' => 'Customer Name']) }}
    </div>
    <div class="form-group">
            {{ Form::label('customer_address', 'Customer Address') }}
            {{ Form::text('customer_address', '', ['class' => 'form-control', 'placeholder' => 'Customer Address']) }}
    </div>
    <div class="form-group">
            {{ Form::label('customer_contact', 'Customer Contact') }}
            {{ Form::number('customer_contact', '', ['class' => 'form-control', 'placeholder' => 'Customer Contact']) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}   

    {!! Form::close() !!}
@endsection
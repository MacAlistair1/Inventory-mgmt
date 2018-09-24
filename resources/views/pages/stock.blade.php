@extends('layouts.app')

@section('content')
@include('includes.message')
<div style="display: block;" id="print" class="lead bg-light">
				
        <ul style="margin:20px">
            <table class="table table-striped">
            <tr>
            <th>SNo.</th>
            <th>Product Name</th>
            <th>Product quantity</th>
            <th>Stock</th>
            <th></th>
            <th></th>
            </tr>
            @if (count($products) > 0)
            <?php $sno = 0; ?>
                @foreach ($products as $product)
                <?php $sno++; ?>
                    <tr>
                        <td>{{ $sno }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_quantity }}</td>
                        <td>
                            @if (($product->product_quantity) > 0)
                                <h4 style="color:red"><mark style="background-color:green; color:white;">Available</mark></h4>
                            @else
                                <h4 style="color:black"><mark style="background-color:yellow">Not Available</mark></h4>
                            @endif
                        </td>
                        <td>
                            <a href="/product/{{ $product->id }}/edit" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                                {!! Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                <td><h4 >{{ $products->links() }}</h4></td>
                <h5 style="color:salmon;">{{ count($products)}} Records Found!!</h5>
            @else
            <h5 style="color:salmon;">{{ count($products)}} Records Found!!</h5>
            @endif
            </table>
        </ul>
</div>
@endsection
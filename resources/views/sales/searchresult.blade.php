@extends('layouts.app')

@section('content')
<div class="justify-content-center">
<div style="display:block;" id="print" class="bg-light small">
				
        <ul style="margin:10px">
            <table class="table table-striped" style="font-size:8pt;">
            <tr>
            <th><?php echo "#."; ?></th>
            <th>Product Name</th>
            <th>Sales Date</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th>Total Amount</th>
            <th>Paid Amount</th>
            <th>Due Amount</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Contact</th>
            </tr>
            @if (count($sales) > 0)
            @foreach ($sales as $sale)
            <tr>
                    <td>
                        {{ $sale->product_id }}
                    </td>
                    <td>
                        {{ $sale->product_name }}
                    </td>
                    <td>
                        {{ $sale->sales_date}}
                    </td>
                    <td>
                        {{ $sale->product_rate }}
                     </td>
                    <td>
                        {{ $sale->sales_quantity }}
                    </td>
                    <td>
                        {{ $sale->sales_amount }}
                    </td>
                    <td>
                        {{ $sale->paid_amount }}
                    </td>
                    <td>
                        {{ $sale->due_amount }}
                    </td>
                    <td>
                        @if (($sale->customer_name) !=null)
                           {{ $sale->customer_name }}
                        @else
                        <p style="color:royalblue">{{ '---- ---- ----' }}</p>
                        @endif
                    </td>
                    <td>
                            @if (($sale->customer_address) !=null)
                            {{ $sale->customer_address }}
                         @else
                             <p style="color:royalblue">{{ '---- ---- ----' }}</p>
                         @endif
                    </td>
                    <td>
                            @if (($sale->customer_contact) !=null)
                            {{ $sale->customer_contact }}
                         @else
                         <p style="color:royalblue">{{ '---- ---- ----' }}</p>
                         @endif
                    </td>
                </tr>
            @endforeach
            <h5 style="color:salmon;">{{ count($sales)}} Records Found!!</h5>
        @else
        <h5 style="color:salmon;">{{ count($sales)}} Records Found!!</h5>
        @endif
            
            </table>
        </ul>
</div>
</div>
@endsection
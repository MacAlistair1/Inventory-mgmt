<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Product;

class SalesController extends Controller
{
   /*
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'sales_rate' => 'required',
            'sales_quantity' => 'required',
            'paid_amount' => 'required',
            'customer_contact' => 'max:13|min:10'
        ]);

        $total_amt = (($request->input('sales_rate'))*($request->input('sales_quantity')));
        $due_amount = $total_amt - ($request->input('paid_amount'));

        $name = (int)$request->input('product_name');
        $product = Product::skip($name)->first();

        $sale = new Sale;
        $sale->product_name = $product->product_name;
        $sale->product_rate = $request->input('sales_rate');
        $sale->sales_quantity = $request->input('sales_quantity');
        $sale->sales_amount = $total_amt;
        $sale->paid_amount = $request->input('paid_amount');
        $sale->customer_name = $request->input('customer_name');
        $sale->customer_address = $request->input('customer_address');
        $sale->customer_contact = $request->input('customer_contact');
        $sale->due_amount = $due_amount;
        $sale->product_id = $product->id;
        $sale->save();

       
        $total_quantity = $product->product_quantity;
        $remain_quantity = $total_quantity - ((int)$request->input('sales_quantity'));
        $product->product_quantity = $remain_quantity;
        $product->save();

        
        return redirect('/addsales')->with('success', 'Product Sold!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $sale = Sale::find($id);
     $sale->delete();     
     return redirect('/viewall')->with('success', 'Sales Record Deleted!');
     
    }

    public function viewall()
    {
        $sales = Sale::orderBy('sales_date', 'desc')->paginate(4);
        return view('sales.viewall')->with('sales', $sales);
    }

    
}

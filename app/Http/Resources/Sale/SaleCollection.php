<?php

namespace App\Http\Resources\Sale;

use Illuminate\Http\Resources\Json\Resource;

class SaleCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'product_name' => $this->product_name,
            'rate' => $this->product_rate,
            'quantity' => $this->sales_quantity,
            'due_amount' => $this->due_amount,
            'customer_name' => $this->customer_name,
            'href' => [
                'link' => route('sales.show', $this->id)
            ]
        ];
    }
}

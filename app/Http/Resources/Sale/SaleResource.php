<?php

namespace App\Http\Resources\Sale;

use Illuminate\Http\Resources\Json\Resource;

class SaleResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'date' => $this->sales_date,
            'product_name' => $this->product_name,
            'rate' => $this->product_rate,
            'quantity' => $this->sales_quantity,
            'sales_amount' => $this->sales_amount,
            'paid_amount' => $this->paid_amount,
            'due_amount' => $this->due_amount,
            'customer_name' => $this->customer_name,
            'customer_address' => $this->customer_address,
            'customer_contact' => $this->customer_contact
        ];
    }
}

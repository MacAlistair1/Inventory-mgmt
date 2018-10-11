<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    public $timestamps = false;

    public $primarykey = 'id';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}

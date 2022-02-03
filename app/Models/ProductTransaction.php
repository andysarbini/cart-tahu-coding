<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTransaction extends Model
{
    protected $table = 'product_transaction'; // define table for this model
    protected $guarded = [];
    use HasFactory;

    public function product() {
        return $this->belongsTo(Product::class);
    }

}

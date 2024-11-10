<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_info',
        'category',
        'rating',
        'industry_specific'
    ];

    protected $casts = [
        'contact_info' => 'array',
        'industry_specific' => 'array',
        'rating' => 'decimal:2'
    ];

    // A supplier has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // A supplier has many purchase orders
    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class);
    }
}

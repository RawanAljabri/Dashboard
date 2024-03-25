<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =[
        'Productid',
        'Price',
        'Qty',
        'Tax',
        'Total',
        'Discount',
        'Net',
        'Userid'
        ];
}

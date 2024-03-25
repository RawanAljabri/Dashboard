<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable =[
        'Productid',
        'pproductname',
        'Price',
        'Qty',
        'Tax',
        'Total',
        'Discount',
        'Net',
        'Userid',
        
        ];
}

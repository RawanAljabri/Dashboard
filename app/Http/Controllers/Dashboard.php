<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Dashboard extends Controller
{
    // اجبار لتسجيل الدخول
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        return view('dashboard.index');
    }
    public function GetProduct()
    {
        $products =Product::all();
        return view('dashboard.products',['products'=>$products]);
    }
    
    public function CreateProduct(Request $request){
        $products = Product::create([
            'Productname' => $request->Productname
        ]);
         $products->save();
        return redirect('/dashboard/products'); 
       }


}

<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;

class KYProductsController extends Controller
{
    public function index() {
        $products = Products::all();
        return($products);
    }
    public function create(Request $request){
        $data = array(
            "name" => $request ->name,
            "price" => $request ->price,
            "image" => $request ->image,
            "description" => $request ->description,
        );
        return Products::create($data);
    }
    public function addToCart($id)
{
$product = Products::findOrFail($id);
$cart = session()->get('cart', []);
  
if(isset($cart[$id])) {
$cart[$id]['quantity']++;
} else {
$cart[$id] = [
"name" => $product->name,
"quantity" => 1,
"price" => $product->price,
"image" => $product->image
];
}
          
session()->put('cart', $cart);
return redirect()->back()->with('success', 'Product added to cart successfully!');
}
}

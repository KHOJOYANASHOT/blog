<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::with(['brand'])->get();
    foreach ($products as $product) {
      echo 'Product name :' . $product->title . '<br />';
      echo 'Brand        :' . $product->brand?->brand_name . '<br />';
      echo '---------------------------------------------' . '<br />';
    }
  }
  public function store()
  {
    // $category_id = [1, 2, 4];
    $brand_id = 1;
    $product = Product::create([
      'title' => 'Shoes Futsal Adidas',
      'price' => '555',
      'brand_id' => $brand_id
    ]);
    // // we can use method sync for update or delete $category_id
    // $product->categories()->sync($category_id);


    // $product = Product::find(7);
    // dd($product->name); exit;

    // $product = Product::find(5);
    // $product->name = "Kanye";
    $product->save();
    dd($product->title); exit;
  }
  public function showData()
  {
    $product = Product::with(['categories'])->get();
    dd($product->toArray());
  }
}

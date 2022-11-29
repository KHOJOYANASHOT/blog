<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showData()
  {
    $category = Category::with(['products'])->get();
    dd($category->toArray());
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::with(['products'])->get();
        dd($brand->toArray());
    }
    // public function index()
    // {
    //     $brands = Brand::with(['products'])->get();
    //     echo '<table>';
    //     echo '<tr>
    //     <th>No</th>
    //     <th>Brand</th>
    //     <th>Product</th>
    //     <th>Product count</th>
    //     </tr>';
    //     $no = 1;
    //     foreach ($brands as $brand) {
    //         echo '<tr>
    //      <td>' . $no++ . '</td>
    //      <td>' . $brand->brand_name . '</td>
    //      <td>';
    //         foreach ($brand->products as $product) {
    //             echo $product->title;
    //         }
    //         echo '</td>
    //    <td>' . $brand->products->count() . '</td>
    //   </tr>';
    //     }
    //     echo '</table>';
    // }
}

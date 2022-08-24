<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\Models\Product;

class CatalogController extends Controller
{
    public function index(Request $request){
      $title = 'Продукты';
      $count_products = Product::get()->count();

      if($request->page > $count_products / 50) {
        abort(404);
      }

      $skip = 0;
      $take = 50;
      $current_page = 1;
      if($request->page && $request->page != 1) {
        $skip = $take;
        $current_page = $request->page;
      }

      $products = Product::get()->skip($skip)->take(50);
      return view('catalog', compact('title','products', 'count_products', 'current_page'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
	public function get_products()
	{
		$products = Product::all();
		return view('welcome',['products' => $products]);
	}
}

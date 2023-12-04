<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
   public function index()
   {
    return view('product',[
        'pageTitle'=>'produk',
        'content'=>'ini halaman produk',
        'produks'=>product::all()
    ]);
   }
}

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
   public function create()
   {
    return view('create',[
        'pageTitle' => 'tambah prduk',
        'content' => 'ini halaman produk'
    ]);
   }
   public function store(Request $request)
   {
    $request->validate([
        'product' => 'required',
        'price' => 'required',
        'stock' => 'required'
    ]);
    product::create([
        'product' => $request->product,
        'price' => $request->price,
        'stock' => $request->stock
    ]);
    return redirect('/product');
}
public function edit($id)
    {
        return view('edit', [
            'pageTitle' => 'Edit Produk',
            'product' => Product::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        Product::findOrFail($id)->update([
            'product' => $request->product,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect('/product');
    }
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect('/product');
    }
}
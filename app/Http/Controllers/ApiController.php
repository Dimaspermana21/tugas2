<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ApiController extends Controller
{
    public function product_index(){
    $product = Product::get();
    return response()->json($product);
    }
    Public function product_store(request $request){
        product::insert([
            'product'       => $request->api_product,
            'price'       => $request->api_price,
            'stock'       => $request->api_stock,
        ]);


        $response = array(
            'responseCode'=>'00',
            'responseStatus'=>'Success'
        );
        return response()->json($response);
    }

    public function product_by_id($id){
        $product = Product::where('id', $id)->get();
        return response()->json($product);
    }
    public function product_delete_by_id($id){
        $product = Product::find($id);
     if (!$product){
        return response()->json([
            'message' => 'produk tidak ada'
        ], 404);
     }
     $product->delete();
     return response()->json([
        'message'=>'produk berhasil dihapus'
     ], 200);
}
}
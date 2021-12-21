<?php

namespace App\Http\Controllers\API;

use App\Models\ProductData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductData::all();
        return response()->json([
            'status'=> 200,
            'products'=>$products,
        ]);
    }

    public function destroy($id)
    {
        $product = ProductData::find($id);
        if($product)
        {
            $product->delete();
            return response()->json([
                'status'=> 200,
                'message'=>'Product Deleted Successfully',
            ]);
        }
        else
        {
            return response()->json([
                'status'=> 404,
                'message' => 'No Product ID Found',
            ]);
        }
    }
}

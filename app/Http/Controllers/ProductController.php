<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

class ProductController extends Controller
{
    public function ShowProducts(){
        $products = Product::all();
        $data = [
            'status' => 200,
            'products' => $products

        ];
        return response()->json($data, 200);
    }

    //to upload product
    public function UploadProduct(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'sku'=>'required',
            'category_id'=>'required',
            'image'=>'required',
            'is_active'=>'required'
        ]);
        if($validator->fails())
        {
            $data = [
                "status" => 422,
                "message" => $validator -> messages()
            ];
            return response()->json($data,200);
        }
        else {
            $product = new Product;
            
            $product->name = $request -> name;
            $product->description = $request -> description;
            $product->price = $request -> price;
            $product->quantity = $request -> quantity;
            $product->sku = $request -> sku;
            $product->category_id = $request -> category_id;
            $product->image = $request -> image;
            $product->oldPrice = $request -> oldPrice;
            $product->is_active = $request -> is_active;

            
            $product->save();

            $data = [
                'status' => 200,
                'message' => "Product uploaded successfully"
            ];

            return response() -> json($data, 200);

        }

    }
    
    //to update product
    public function EditProduct(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'sku'=>'required',
            'category_id'=>'required',
            'image'=>'required',
            'is_active'=>'required'
        ]);
        if($validator->fails())
        {
            $data = [
                "status" => 422,
                "message" => $validator -> messages()
            ];
            return response()->json($data,200);
        }
        else {
            $product = Product::find($id);
            
            $product->name = $request -> name;
            $product->description = $request -> description;
            $product->price = $request -> price;
            $product->quantity = $request -> quantity;
            $product->sku = $request -> sku;
            $product->category_id = $request -> category_id;
            $product->image = $request -> image;
            $product->oldPrice = $request -> oldPrice;
            $product->is_active = $request -> is_active;

            
            $product->save();

            $data = [
                'status' => 200,
                'message' => "Product upldated successfully"
            ];

            return response() -> json($data, 200);

        }

    }

    //to delete product
    public function DeleteProduct($id){
        $product = Product::find($id);

        $product -> delete();
        $data = [
            'status' => 200,
            'message' => "Product Deleted successfully"
        ];

        return response() -> json($data, 200);

    }

}

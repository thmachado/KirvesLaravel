<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function token(){

        $token = csrf_token();

        $data = [
            "token" => $token
        ];

        return Response::json($data);
    }

    public function index(){

        $products = Product::all();
        return Response::json($products);
    }

    public function insert(Request $r){
        $validator = Validator::make($r->json()->all(), [
            "title" => "required|unique:products|max:255",
            "type" => "required|max:255",
            "quantity" => "required",
            "price" => "required"
        ]);

        if($validator->fails()){
            $errors = $validator->errors();
            return Response::json($errors->all());
        }

        $validated = $validator->validated();

        $product = Product::create([
            "title" => $validated["title"],
            "type" => $validated["type"],
            "quantity" => $validated["quantity"],
            "price" => $validated["price"]
        ]);

        return Response::json($product);
    }

    public function update(Request $r, int $id){

        $product = Product::find($id);
        if(!$product){
            abort(404);
        }

        $validator = Validator::make($r->json()->all(), [
            "title" => "required|unique:products|max:255",
            "type" => "required|max:255",
            "quantity" => "required",
            "price" => "required"
        ]);

        if($validator->fails()){
            $errors = $validator->errors();
            return Response::json($errors->all());
        }

        $validated = $validator->validated();

        $product->title = $validated["title"];
        $product->type = $validated["type"];
        $product->quantity = $validated["quantity"];
        $product->price = $validated["price"];

        $product->save();

        return Response::json($product);
    }
}

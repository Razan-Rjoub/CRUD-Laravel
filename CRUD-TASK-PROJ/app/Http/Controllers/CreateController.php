<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CreateController extends Controller
{

    public function index(){

        $products = Product::all();
        return view('index',compact('products'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){

        $products=Product::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'description'=>$request->description,
        'quantity'=>$request->quantity,
        'image'=>$request->image,
]);
return redirect()->route('welcome')->with(['success' => 'created successfully
']);
    }
}

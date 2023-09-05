<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class updateController extends Controller
{
    public function getupdate($id){
        $data= product::select("*")->find($id);
       
        return view('update',['data'=>$data]);
    }
    public function updateData(Request $request,$id){
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['quantity'] = $request->quantity;
        $data['price'] = $request->price;
        $data['image'] = $request->image;
        product::where(['id'=>$id])->update($data);
        return redirect()->route('welcome')->with(['success' => 'updated successfully
        ']);
    }
}

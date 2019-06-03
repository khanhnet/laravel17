<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //dùng orderBy() desc để sắp xếp những bản ghi mới nhất lên trên
        $products=Product::orderBy('id','desc')->get();
        return view('products_ajax',compact('products')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $product=Product::create($request->all());
     return response()->json(['data'=>$product],200);
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $product=Product::find($id);
        return response()->json(['data'=>$product],200);//chuyền vào data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product=Product::find($id);
       return response()->json(['data'=>$product],200);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id)->update($request->all());
        $product=Product::find($id);
        return response()->json(['data'=>$product],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return response()->json(['data'=>'removed'],200);
    }
}

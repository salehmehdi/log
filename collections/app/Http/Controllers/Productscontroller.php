<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;

class Productscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Usage of 'where' in collections
        
        $products=Product::get()->toArray();
       $product=collect($products)->where("id",1)->all();
       
       //Usage of 'whereBetween' in collections

       $prices=Price::get()->toArray();
       $price=collect($prices)->whereBetween('price',[90,120])->all();
      

       //Usage of 'whereIn' in collections

       $prices=Price::with('products')->get()->toArray();
       $price=collect($prices)->whereIn('product_id',[1,3])->all();
       dd($price);

       //Usage of 'map' in collections
       
       $prices=Price::all();
       $updateprices=collect($prices)->map(function($price)
       {
        $price->price=$price->price*1.1;
        return $price;
       });

       foreach($updateprices as $price)
       {
        $price->save();
       }

       //Usage of 'reject' in collections
       
       



    //Usage of '' in collections
    }/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Product::create([
            "product_code"=>"P004",
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

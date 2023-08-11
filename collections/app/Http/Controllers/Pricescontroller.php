<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Pricescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::find(1);
        
        $isAccessible = Arr::accessible($prices);
       // dd ($isAccessible);       //True
      
       $products = Product::get();
       $product = $products->where('id',1)->first();
       $filtered = Arr::except($product, ['product_code']);
    
        //dd($product);
        $exists = Arr::exists($product , 'name');
       // dd($exists);                 //false
    
    
    
       $prices = Price::all();

       $allPrices = [];

       foreach ($prices as $price) 
       {
         $allPrices[] = $price->price;
       }
       
       $first = Arr::first($allPrices, function ($value, $key) 
        {
        return $value >= 300;
        });

       // dd($first );          //  "last" can also be used.



       $gets = Product::with('prices')->get();
       $get = $gets->where('id', 1)->first(); 

        if ($get)
        {
          $price = Arr::get($get, 'prices.0.price'); 
         // dd($price);
        }


        $products = Product::find(1);
        $mapped = Arr::map($products->toArray(), function ($value, $key) {
            return ucfirst($value);
        });
        dd($products);

    }

    /**
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
     * 
     */
    public function store()
    {
        $products = Product::find(3);
        
        $price= new Price([
         "price"=>"200",
        ]);
        $products->prices()->save($price);
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

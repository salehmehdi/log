<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\Models\Stock;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::with('color')->get()->toArray();
        
        dd($product);
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
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function show()
{
    $products = Product::get()->toArray();
    $data = [];
    dd(Product::get());

    foreach ($products as $product)
    {
        $dataproduct = $product;


        $colors = Color::where('product_id', $product['id'])->get()->toArray();

        if ($colors)
        {
            foreach ($colors as $color)
            {
                $colordata = $color;

                $sizes = Size::where('color_id', $color['id'])->get()->toArray();
                

                if ($sizes)
                {
                    foreach ($sizes as &$size)
                    {
                        $stock = Stock::where('size_id', $size['id'])->get()->first()?->toArray();
                        
                        $size['stocks'] = $stock;
                    }
                    $colordata['size'] = $sizes;
            
                    $productcolor[] = $colordata;
                }

            }
            $dataproduct['colors'] = $productcolor;
            $data[] = $dataproduct;
        }

    }
    dd($data);
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
        $products=Product::with('color')->get()->toArray();
        $data=[];

       foreach($products as $product)
       {
         $productdata=$product;
         $productcolor=[];
         
         $colors = Color::where('product_id', $product['id'])->get()->toArray();
       
         if($colors)
         {
           foreach($colors as $color)
           {
               $colordata=$color;

               $sizes=Size::where('color_id',$color['id'])->get()->toArray();

               $colordata['size']=$sizes;

               foreach($sizes as $size)
               {
                   $sizestock=Stock::where('size_id',$size['id'])->get()->toArray();

                   $size['stocks']=$sizestock;
               }
              
               $productcolor[] = $colordata;
           }
         }
        
         $productdata['colors'] = $productcolor;
         $data[] = $productdata;
         
       }
       dd($data);
    }
}

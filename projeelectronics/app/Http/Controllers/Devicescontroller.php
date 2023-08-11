<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Electronic;
use App\Models\Device;
use App\Models\Memories;
use App\Models\Stock;

class Devicescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $devices = Device::get()->toArray();

    $data = [];

    foreach ($devices as &$device)
    {
        $datadevice = $device;
        $device_electronic = [];

        $electronics = Electronic::where('device_id', $device['id'])->get()->toArray();

        if (!$electronics) { continue;}

        foreach ($electronics as &$electronic)
        {
            $dataelectronic = $electronic;
            $electronic_memories = [];

            $memories = Memories::where('electronic_id', $electronic['id'])->get()->toArray();

            if (!$memories) {continue;}

            foreach ($memories as &$memory) 
            {
                $memory_stock = Stock::where('memory_id', $memory['id'])->get()->first()?->toArray();
                $memory['stocks'] = $memory_stock;
                $electronic_memories[] = $memory;
            }

            $dataelectronic['memories'] = $electronic_memories;
            $device_electronic[] = $dataelectronic;
        }

        $datadevice['electronics'] = $device_electronic;
        $data[] = $datadevice;
    }

    dd($data);
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
      
      
      
        $devices=Device::get()->toArray();
       foreach($devices as $device)
       {
        $stocks=Stock::where('device_id',3)->sum('count');
        return $stocks;
        
       }
        


        
    
       
        

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

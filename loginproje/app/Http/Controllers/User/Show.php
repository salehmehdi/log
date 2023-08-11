<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Users;

class Show extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
       $users=Users::get();
        $user=$users->where('id',1)->all();
       foreach($user as $key)
       {
        if(!$key){continue;}
       
        $userName=$key->name;
        return $userName;
       }
    }
}

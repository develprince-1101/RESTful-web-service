<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessAddress;

class BusinessAddressController extends Controller
{
    public function index(){
        $business_address=BusinessAddress::all();

        return response()->json(['address' => $business_address]);
    }
    public function show($id){
        $business_address=BusinessAddress::find($id);

        return response()->json(['address' => $business_address]);
    }



}

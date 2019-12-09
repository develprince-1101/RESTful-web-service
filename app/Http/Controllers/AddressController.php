<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function index(){
        $business_address=Address::all();

        return response()->json(['address' => $business_address]);
    }
    public function show($id){
        $business_address=Address::find($id);

        return response()->json(['address' => $business_address]);
    }
}

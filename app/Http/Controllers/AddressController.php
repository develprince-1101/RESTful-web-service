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
    public function store(Request $request){
        $business_address=Address::create([
            'street' => $request->description,
            'building_no' => $request->building_no
        ]);
        return response()->json($this->getAll());
    }

    public function destroy($id){
        $business_address=Address::find($id);
        $business_address->delete();

        return response()->json($this->getAll());

    }

    public function update(Request $request,$id){
        $business_address=Address::find($id);
        $business_address->street=$request->street;
        $business_address->building_no=$request->building_no;
        $business_address->save();

        return response()->json($this->getAll());

    }
    public function search(Request $request, $query){
        //return response()->json($query);
        $business_query=Address::where('street','LIKE','%'.$query.'%')->get();

        return response()->json(['Address' => $business_query]);
    }

    private function getAll()
    {
        $business_address = Address::all();

        return $business_address;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessType;
use App\BusinessEntity;
use App\BusinessAddress;
use App\Address;

class BusinessTypeController extends Controller
{
    public function index(){
        $business_type = BusinessType::all();
        return response()->json($business_type);

    }

    public function show($id){
        $business_type=BusinessType::find($id);
        return response()->json($business_type);
    }

    public function store(Request $request){
        $business_type=BusinessType::create([
            'description' => $request->description,
        ]);
        return response()->json($this->getAll());
    }

    public function destroy($id){
        $business_type=BusinessType::find($id);
        $business_type->delete();

        return response()->json($this->getAll());

    }

    public function update(Request $request,$id){
        $business_type=BusinessType::find($id);
        $business_type->description=$request->description;
        $business_type->save();

        return response()->json($this->getAll());

    }
    public function search(Request $request, $query){
        //return response()->json($query);
        $business_type_query=BusinessType::where('description','LIKE','%'.$query.'%')->first();
        $business_entity_query=BusinessEntity::where('business_type_id', $business_type_query->id)->with('business_addresses.address')->get();
        //$business_address_query=BusinessAddress::where('business_entity_id',$business_entity_query)->get();
       // $Address_query=Address::where('id',$business_address_query)->get();

        if($business_type_query){
        //$business_entitiets = BusinessEntity::where('business_type_id', $business_type_query->id)->get();

        return response()->json($business_entity_query);
        }else{

        }
    }


    private function getAll(){
        $business_type= BusinessType::all();

        return $business_type;
    }
}

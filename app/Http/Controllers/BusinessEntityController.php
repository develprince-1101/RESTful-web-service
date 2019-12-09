<?php

namespace App\Http\Controllers;

use App\BusinessEntity;
use Illuminate\Http\Request;

class BusinessEntityController extends Controller
{
    public function index()
    {
        $business_entities = BusinessEntity::with('business_type')->get();

        return response()->json($business_entities);
    }

    public function show($id){
        $business_entity=BusinessEntity::find($id);

        return response()->json($business_entity);
    }

    public function store(Request $request){
        $business_entity = BusinessEntity::create([
            'name' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'contact_number' => $request->contact_number,
            'business_type_id' => $request->type_id
        ]);

        return response()->json($business_entity);
    }

    public function destroy($id){
        $business_entity=BusinessEntity::find($id);
        $business_entity->delete();

        return response()->json($this->getAll());
    }

    public function update(Request $request, $id){
        $business_entity=BusinessEntity::find($id);
        $business_entity->name = $request->description;
        $business_entity->latitude = $request->latitude;
        $business_entity->longitude = $request->longitude;
        $business_entity->contact_number = $request->contact_number;
        $business_entity->business_type_id = $request->type_id;
        $business_entity->save();

        return response()->json($this->getAll());
    }
    public function search(Request $request, $query){
        //return response()->json($query);
        $business_query=BusinessEntity::where('name','LIKE','%'.$query.'%')->get();

        return response()->json(['Business' => $business_query]);
    }

    private function getAll()
    {
        $business_entities = BusinessEntity::all();

        return $business_entities;
    }
}

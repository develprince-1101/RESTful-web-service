<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Services;

class HospitalServiceController extends Controller
{
    public function index($id){

        $hospital         = Hospital::find($id);
        $hospital_service = $hospital->services;
        $services         = Services::all();



        return view('hospitals.hospital_service')->with('hospital_service',$hospital_service)
                                                ->with('hospital',$hospital)
                                                ->with('services',$services);

    }

    public function store(Request $request,$hos_id){

        $hospital = Hospital::find($hos_id);
        foreach($request->service_id as $counter => $serve){

            $hospital->services()->attach([
                $serve => [
                    'price' => $request->price[$counter]
                ]

            ]);



        }

        return redirect('/hospital-service/'.$hos_id);
    }

    public function destroy($hos_id, $service_id){

        $hospital = Hospital::find($hos_id);
        $hospital->services()->detach($service_id);

        return redirect('/hospital-service/'.$hos_id);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Doctor;

class DoctorHospitalController extends Controller
{
    public function index($id){

        $hospital        = Hospital::find($id);
        $doctor_hospital = $hospital->doctors;
        $doctors         = Doctor::all();



        return view('hospitals.doctor_hospital')->with('doctor_hospital',$doctor_hospital)
                                                ->with('hospital',$hospital)
                                                ->with('doctors',$doctors);

    }

    public function store(Request $request,$hos_id){

        $hospital = Hospital::find($hos_id);
        foreach($request->doc_id as $doc){

            $hospital->doctors()->attach($doc);

        }

        return redirect('/doctor-hospital/'.$hos_id);
    }

    public function destroy($hos_id, $doc_id){

        $hospital = Hospital::find($hos_id);
        $hospital->doctors()->detach($doc_id);

        return redirect('/doctor-hospital/'.$doc_id);

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Specialization;
use App\Doctor_Specialization;

class DocSpecController extends Controller
{
    public function index($id){

        $doctor = Doctor::find($id);
        $docspec = $doctor->specializations;
        $specializations = Specialization::all();

        return view('doctors.docspec')->with('specs',$docspec)
                                      ->with('doctor',$doctor)
                                      ->with('specializations',$specializations);

    }

    public function store(Request $request,$doc_id){

        $doctor = Doctor::find($doc_id);
        foreach($request->spec_id as $spec){

            $doctor->specializations()->attach($spec);

        }

        return redirect('/docspec/'.$doc_id);
    }

    public function destroy($doc_id, $spec_id){

        $doctor = Doctor::find($doc_id);
        $doctor->specializations()->detach($spec_id);

        return redirect('/docspec/'.$doc_id);

    }


}

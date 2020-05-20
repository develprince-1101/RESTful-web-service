<?php

namespace App\Http\Controllers;

use App\Hospital;
use App\Barangay;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index(){

        $hospitals = Hospital::all();


        return view('hospitals.index')->with('hospitals',$hospitals);

    }

    public function add()
    {
        $barangays = Barangay::all();

        return view ('hospitals.add')->with('barangays',$barangays);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hospital_name'    => 'required',
            'contact_no'  => 'required'
        ]);

        $hospital=Hospital::create([
            'barangay_id'       => $request->barangay_id,
            'hospital_name'     => $request->hospital_name,
            'contact_no'        => $request->contact_no
        ]);

            return redirect('/hospitals');
    }

    public function show($id)
    {
        $hospital           = Hospital::find($id);
        //$barangay           = Barangay::fin($hospital->barangays()->id);
        $hospital_barangay  = $hospital->barangays->id;
        $barangays          = Barangay::all();

        // dd($hospital->barangays->barangay_name);
        return view('hospitals.update')->with('hospital', $hospital)
                                       ->with('barangays',$barangays)
                                       ->with('hospital_barangay',$hospital_barangay);

    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'hospital_name'    => 'required',
            'contact_no'  => 'required'
        ]);

        $hospital                  = Hospital::find($id);
        $hospital->barangay_id     = $request->barangay_id;
        $hospital->hospital_name   = $request->hospital_name;
        $hospital->contact_no      = $request->contact_no;

        //dd($hospital);
        $hospital->save();

        return redirect('/hospitals');
    }

    public function destroy($id){

        $hospital = Hospital::find($id);
        $hospital->delete();
        //dd($hospital);
        return redirect('/hospitals');

    }
}

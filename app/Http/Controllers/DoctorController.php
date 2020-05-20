<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {

            $doctors = Doctor::all();

            return view ('doctors.index')->with('doctors', $doctors);
    }

    public function add()
    {
            return view ('doctors.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'doc_name'    => 'required',
            'gender'      => 'required',
            'contact_no'  => 'required'
        ]);

        $doctor=Doctor::create([
            'doc_name'     => $request->doc_name,
            'gender'       => $request->gender,
            'contact_no'   => $request->contact_no
        ]);

            return redirect('/doctors');
    }

    public function show($id)
    {
        $doctor=Doctor::find($id);

        return view('doctors.update')->with('doctor', $doctor);

    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'doc_name'    => 'required',
            'gender'      => 'required',
            'contact_no'  => 'required'
        ]);

        $doctor             = Doctor::find($id);
        $doctor->doc_name   = $request->doc_name;
        $doctor->gender     = $request->gender;
        $doctor->contact_no = $request->contact_no;
        $doctor->save();

        return redirect('/doctors');
    }

    public function destroy($id){

        $doctor=Doctor::find($id);
        $doctor->delete();

        return redirect('/doctors');

    }

}

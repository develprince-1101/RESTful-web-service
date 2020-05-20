<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;

class SpecializationController extends Controller
{
    public function index(){
        $specializations = Specialization::all();

        return view('specializations.index')->with('specializations', $specializations);

    }

    public function add(){

        return view('specializations.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'spec_name'       => 'required',
            'spec_desc'       => 'required'
        ]);

        $specialization=Specialization::create([
            'spec_name'       => $request->spec_name,
            'spec_desc'       => $request->spec_desc
        ]);

            return redirect('/specializations');
    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'spec_name'       => 'required',
            'spec_desc'       => 'required'
        ]);

        $specialization              = specialization::find($id);
        $specialization->spec_name   = $request->spec_name;
        $specialization->spec_desc   = $request->spec_desc;
        $specialization->save();

        return redirect('/specializations');
    }

    public function show($id)
    {
        $specialization=Specialization::find($id);

        return view('specializations.update')->with('specialization', $specialization);

    }

    public function destroy($id){
        $specialization=Specialization::find($id);
        $specialization->delete();

        return redirect('/specializations');

    }

}

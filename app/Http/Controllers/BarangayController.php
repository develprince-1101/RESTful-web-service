<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangay;
use App\Address;

class BarangayController extends Controller
{
    public function index()
    {
        $barangays = Barangay::all();

        return view('barangays.index')->with('barangays',$barangays);

    }

    public function show($id)
    {
        $barangay           = Barangay::find($id);
       $barangay_address   = $barangay->addresses->id;
        $addresses          = Address::all();

        //dd($barangay->addresses->id);
        return view('barangays.update')->with('barangay', $barangay)
                                       ->with('addresses',$addresses)
                                       ->with('barangay_address',$barangay_address);

    }

    public function add(){

        $addresses = Address::all();

        return view('barangays.add')->with('addresses',$addresses);

    }

    public function store(Request $request){

        // $validatedData = $request->validate([
        //     'address_id'    => 'required',
        //     'barangay_name' => 'required',
        //     'Latitude'      => 'required',
        //     'Longitude'     => 'required'
        // ]);

        $barangay= Barangay::create([
            'address_id'     => $request->address_id,
            'barangay_name'  => $request->name,
            'Latitude'       => $request->latitude,
            'Longitude'      => $request->longitude

        ]);

        return redirect('/barangays');
    }

    public function update(Request $request, $id){

        // $validatedData = $request->validate([
        //     'address_id'    => 'required',
        //     'barangay_name' => 'required',
        //     'Latitude'      => 'required',
        //     'Longitude'     => 'required'
        // ]);

        $barangay                    = Barangay::find($id);
        $barangay->address_id        = $request->address_id;
        $barangay->barangay_name     = $request->name;
        $barangay->Latitude          = $request->latitude;
        $barangay->Longitude         = $request->longitude;
        $barangay->save();

        return redirect('/barangays');


    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function index()
    {

            $addresses = Address::all();
            return view ('addresses.index')->with('addresses', $addresses);
    }

    public function show($id)
    {
        $address=Address::find($id);

        return view('addresses.update')->with('address', $address);

    }

    public function add()
    {
            return view ('addresses.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'city'     => 'required',
            'zip_code' => 'required',
            'province' => 'required',
            'country'  => 'required'
        ]);

        $address=Address::create([
            'city'     => $request->city,
            'zip_code' => $request->zip_code,
            'province' => $request->province,
            'country'  => $request->country
        ]);

            return redirect('/addresses');
    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'city'     => 'required',
            'zip_code' => 'required',
            'province' => 'required',
            'country'  => 'required'
        ]);

        $address           = Address::find($id);
        $address->city     = $request->city;
        $address->zip_code = $request->zip_code;
        $address->province = $request->province;
        $address->country  = $request->country;
        $address->save();

        return redirect('/addresses');
    }

    public function destroy($id){
        $address=Address::find($id);
        $address->delete();

        return redirect('/addresses');

    }




}

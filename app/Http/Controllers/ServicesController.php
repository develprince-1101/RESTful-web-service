<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    public function index(){

        $services = Services::all();

        return view('services.index')->with('services',$services);

    }

    public function add()
    {
            return view ('services.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'service_name'    => 'required',
            'service_desc'    => 'required'
        ]);

        $service=Services::create([
            'service_name'     => $request->service_name,
            'service_desc'     => $request->service_desc
        ]);

            return redirect('/services');
    }

    public function show($id)
    {
        $service=Services::find($id);

        return view('services.update')->with('service', $service);

    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'service_name'    => 'required',
            'service_desc'    => 'required'
        ]);

        $service                 = Services::find($id);
        $service->service_name   = $request->service_name;
        $service->service_desc   = $request->service_desc;
        $service->save();

        return redirect('/services');
    }

    public function destroy($id){

        $service=Services::find($id);
        $service->delete();

        return redirect('/services');

    }
}

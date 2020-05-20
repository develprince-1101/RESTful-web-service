@extends('layouts.app')

@section('title')

    <title>Update barangay</title>

@endsection

@section('content')

<div class="card-header">Update barangay</div>
<div class="form-group my-5 mx-5">
    <form action="/api/{{$barangay->id}}/update-barangay" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input class="form-control" type ="text" name="name" placeholder="name" value="{{$barangay->barangay_name}}" required="required"/><br>
            <label for="latitude">Latitude:</label>
            <input class="form-control" type ="text" name="latitude" placeholder="latitude" value="{{$barangay->Latitude}}"required="required"/><br>
            <label for="longitude">Longitude:</label>
            <input class="form-control" type ="text" name="longitude" placeholder="longitude" value="{{$barangay->Longitude}}"required="required"/><br>
            <div class="form-group">
            <label for="address_id">Select City:</label>
                <select class="form-control" id="address_id" name="address_id">
                    @foreach($addresses as $address)

                    <option value="{{$address->id}}"{{ ( $address->id == $barangay_address) ? 'selected' : '' }}>{{$address->city}}</option>

                    @endforeach
                </select>
            </div>
            <button class="btn btn-success btn-sm float-center" type="submit" >Save</button>
    </form>
</div>

@endsection

@extends('layouts.app')

@section('title')

    <title>Add barangay</title>

@endsection

@section('content')

<form action="api/store-barangay" method="POST">
@csrf
<div class="card-header">Add Barangay</div>
<div class="form-group my-5 mx-5">
        <label for="name">Name:</label>
        <input id= "name" class="form-control"  type ="text" name="name" placeholder="name" required="required"/><br>
        <label for="latitude">Latitude:</label>
        <input id= "latitude" class="form-control" type ="text" name="latitude" placeholder="latitude"required="required"/><br>
        <label for="longitude">Longitude:</label>
        <input id= "longitude" class="form-control" type ="text" name="longitude" placeholder="longitude"required="required"/><br>
        <div class="form-group">
        <label for="address_id">Select City:</label>
        <select class="form-control" id="address_id" name="address_id">
            @foreach($addresses as $address)

            <option value="{{$address->id}}">{{$address->city}}</option>

            @endforeach
        </select>
        </div>

        <button class="btn btn-success btn-sm float-center" type="submit" >Store</button>
</div>


    </form>

@endsection

@extends('layouts.app')

@section('title')

    <title>Add hospital</title>

@endsection

@section('content')

<form action="api/store-hospital" method="POST">
@csrf
<div class="card-header">Add hospital</div>
<div class="form-group my-5 mx-5">
        <label for="hospital_name">Name :</label>
        <input id= "hospital_name" class="form-control"  type ="text" name="hospital_name" placeholder="name" required="required"/><br>
        <label for="contact_no">Contact number:</label>
        <input id= "contact_no" class="form-control" type ="text" name="contact_no" placeholder="contact number" required="required"/><br>
        <div class="form-group">
        <label for="barangay_id">Select Barangay:</label>
        <select class="form-control" id="barangay_id" name="barangay_id">
            @foreach($barangays as $barangay)

            <option value="{{$barangay->id}}">{{$barangay->barangay_name}}</option>

            @endforeach
        </select>
        </div>
        <button class="btn btn-success btn-sm float-center" type="submit" >Store</button>
</div>


    </form>

@endsection

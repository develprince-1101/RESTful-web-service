@extends('layouts.app')

@section('title')

    <title>Update doctor</title>

@endsection

@section('content')

<div class="card-header">Update doctor</div>
<div class="form-group my-5 mx-5">
    <form action="/api/{{$doctor->id}}/update-doctor" method="POST">
            @csrf
        <label for="doc_name">Name :</label>
        <input id= "doc_name" class="form-control"  type ="text" name="doc_name" placeholder="name" required="required" value="{{$doctor->doc_name}}"required="required"/><br>
        <label for="gender">Gender:</label>
        <input id= "gender" class="form-control" type ="text" name="gender" placeholder="gender" value="{{$doctor->gender}}"required="required"/><br>
        <label for="contact_no">Contact number:</label>
        <input id= "contact_no" class="form-control" type ="text" name="contact_no" placeholder="contact number" value="{{$doctor->contact_no}}"required="required"/><br>
        <button class="btn btn-success btn-sm float-center" type="submit" >Save</button>


    </form>
</div>

@endsection

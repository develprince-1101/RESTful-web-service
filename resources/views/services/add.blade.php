@extends('layouts.app')

@section('title')

    <title>Add service</title>

@endsection

@section('content')

<form action="api/store-service" method="POST">
@csrf
<div class="card-header">Add Services</div>
<div class="form-group my-5 mx-5">
        <label for="service_name">Service Name :</label>
        <input id= "service_name" class="form-control"  type ="text" name="service_name" placeholder="name" required="required"/><br>
        <label for="service_desc">Description:</label>
        <input id= "service_desc" class="form-control" type ="text" name="service_desc" placeholder="description" required="required"/><br>
        <button class="btn btn-success btn-sm float-center" type="submit" >Store</button>
</div>


    </form>

@endsection

@extends('layouts.app')

@section('title')

    <title>Add address</title>
    <link rel="stylesheet" type="text/css" href="/css/submit.css">
@endsection

@section('content')

<form class="form-prevent-multiple-submits" action="api/store-address" method="POST">
@csrf
<div class="card-header">Add address</div>
<div class="form-group my-5 mx-5">
        <label for="city">City:</label>
        <input id= "city" class="form-control"  type ="text" name="city" placeholder="city"required="required" /><br>
        <label for="zip_code">Zip:</label>
        <input id= "zip_code" class="form-control" type ="text" name="zip_code" placeholder="zipcode"required="required"/><br>
        <label for="province">Province:</label>
        <input id= "province" class="form-control" type ="text" name="province" placeholder="province"required="required"/><br>
        <label for="country">Country:</label>
        <input id= "country" class="form-control" type ="text" name="country" placeholder="country"required="required"/><br>
        <button class="btn btn-success btn-sm float-center button-prevent-multiple-submits" type="submit" >
          <i class="spinner fa fa-spinner fa-spin"></i>  Store
        </button>
</div>


    </form>


@endsection


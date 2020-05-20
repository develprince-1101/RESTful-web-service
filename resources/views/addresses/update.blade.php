@extends('layouts.app')

@section('title')

    <title>Update address</title>

@endsection

@section('content')

<div class="card-header">Update address</div>
<div class="form-group my-5 mx-5">
    <form action="/api/{{$address->id}}/update-address" method="POST">
            @csrf
            <label for="city">City:</label>
            <input class="form-control" type ="text" name="city" placeholder="city" value="{{$address->city}}" required="required"/><br>
            <label for="zip_code">Zip:</label>
            <input class="form-control" type ="text" name="zip_code" placeholder="zipcode" value="{{$address->zip_code}}"required="required"/><br>
            <label for="province">Province:</label>
            <input class="form-control" type ="text" name="province" placeholder="province" value="{{$address->province}}"required="required"/><br>
            <label for="country">Country:</label>
            <input class="form-control" type ="text" name="country" placeholder="country" value="{{$address->country}}"required="required"/><br>
            <button class="btn btn-success btn-sm float-center" type="submit" >Save</button>
    </form>
</div>

@endsection

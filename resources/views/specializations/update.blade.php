@extends('layouts.app')

@section('title')

    <title>Update specialization</title>

@endsection

@section('content')

<div class="card-header">Update specialization</div>
<div class="form-group my-5 mx-5">
    <form action="/api/{{$specialization->id}}/update-specialization" method="POST">
            @csrf
        <label for="spec_name">Name :</label>
        <input id= "spec_name" class="form-control"  type ="text" name="spec_name" placeholder="name" required="required" value="{{$specialization->spec_name}}" required="required"/><br>
        <label for="spec_desc">Description :</label>
        <input id= "spec_desc" class="form-control" type ="text" name="spec_desc" placeholder="description" value="{{$specialization->spec_desc}}" required="required"/><br>
        <button class="btn btn-success btn-sm float-center" type="submit" >Save</button>
    </form>
</div>

@endsection

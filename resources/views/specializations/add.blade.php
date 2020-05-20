@extends('layouts.app')

@section('title')

    <title>Add specialization</title>

@endsection

@section('content')

<form action="api/store-specialization" method="POST">
@csrf
<div class="card-header">Add specialization</div>
<div class="form-group my-5 mx-5">
        <label for="spec_name">Name :</label>
        <input id= "spec_name" class="form-control"  type ="text" name="spec_name" placeholder="name" required="required"/><br>
        <label for="spec_desc">Description:</label>
        <input id= "spec_desc" class="form-control" type ="text" name="spec_desc" placeholder="description"required="required"/><br>
        <button id="str" class="btn btn-success btn-sm float-center" type="submit" >Store</button>
</div>


    </form>

@endsection

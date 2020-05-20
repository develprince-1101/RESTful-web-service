@extends('layouts.app')

@section('title')

    <title>hospitals</title>

@endsection

@section('header')

    <h1 class="text-center my-5">hospitals</h1>

@endsection

@section('content')
<div class="card-header">hospitals</div>
    <ul class="list-group">
                @foreach($hospitals as $hospital)

                    <li class="list-group-item">
                        {{$hospital->hospital_name}}
                        <a class="btn btn-danger btn-sm float-right" href="api/hospitals/del/{{$hospital->id}} ">Delete</a>
                        <a class="btn btn-primary btn-sm float-right" href="hospitals/{{$hospital->id}}">Edit</a>
                        <a href="doctor-hospital/{{$hospital->id}}" class="btn btn-secondary btn-sm float-right"  >Doctors</a>
                        <a href="hospital-service/{{$hospital->id}}" class="btn btn-warning btn-sm float-right"  >Services</a>

                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
        <div class="card card-default">
            <a class="btn btn-success btn-sm float-center" href="/add-hospital">Add</a>
        </div>
@endsection

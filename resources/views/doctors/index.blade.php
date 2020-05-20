@extends('layouts.app')

@section('title')

    <title>Doctors</title>

@endsection

@section('header')

    <h1 class="text-center my-5">Doctors</h1>

@endsection

@section('content')
<div class="card-header">Doctors</div>
    <ul class="list-group">
                @foreach($doctors as $doctor)

                    <li class="list-group-item">
                        {{$doctor->doc_name}}
                        <a class="btn btn-danger btn-sm float-right" href="api/doctors/del/{{$doctor->id}} ">Delete</a>
                        <a class="btn btn-primary btn-sm float-right" href="doctors/{{$doctor->id}}">Edit</a>
                        <a href="docspec/{{$doctor->id}}" class="btn btn-secondary btn-sm float-right"  >Spec</a>

                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
        <div class="card card-default">
            <a class="btn btn-success btn-sm float-center" href="/add-doctor">Add</a>
        </div>
@endsection

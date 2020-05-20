@extends('layouts.app')

@section('title')

    <title>Doctors</title>

@endsection

@section('header')

    <h1 class="text-center my-5">Specializations</h1>

@endsection

@section('content')
<div class="card-header">Specializations</div>
    <ul class="list-group">
                @foreach($specializations as $specialization)

                    <li class="list-group-item">
                        {{$specialization->spec_name}}
                        <a class="btn btn-primary btn-sm float-right" href="specializations/{{$specialization->id}}">Edit</a>
                        <a class="btn btn-danger btn-sm float-right" href="api/specializations/del/{{$specialization->id}} ">Delete</a>

                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
        <div class="card card-default">
            <a class="btn btn-success btn-sm float-center" href="/add-specialization">Add</a>
        </div>
@endsection

@extends('layouts.app')

@section('title')

    <title>services</title>

@endsection

@section('header')

    <h1 class="text-center my-5">services</h1>

@endsection

@section('content')
<div class="card-header">services</div>
    <ul class="list-group">
                @foreach($services as $service)

                    <li class="list-group-item">
                        {{$service->service_name}}
                        <a class="btn btn-danger btn-sm float-right" href="api/services/del/{{$service->id}} ">Delete</a>
                        <a class="btn btn-primary btn-sm float-right" href="services/{{$service->id}}">Edit</a>

                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
        <div class="card card-default">
            <a class="btn btn-success btn-sm float-center" href="/add-service">Add</a>
        </div>
@endsection

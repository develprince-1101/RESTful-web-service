
@extends('layouts.app')

@section('title')

    <title>Addresses</title>

@endsection

@section('header')

    <h1 class="text-center my-5">Addresses</h1>

@endsection

@section('content')
    @section('cardhead')
        Barangays
    @endsection
    <ul class="list-group">
        @foreach($barangays as $barangay)
            <li class="list-group-item">
                {{$barangay->barangay_name}}

                <a class="btn btn-danger btn-sm float-right" href="api/barangays/del/{{$barangay->id}} ">Delete</a>
                <a class="btn btn-primary btn-sm float-right" href="barangays/{{$barangay->id}}">Edit</a>

            </li>
        @endforeach
    </ul>


@endsection

@section('button')
        <div class="card card-default">
            <a class="btn btn-success btn-sm float-center" href="/add-barangay">Add</a>
        </div>
@endsection

@extends('layouts.app')

@section('title')

    <title>Addresses</title>

@endsection

@section('header')

    <h1 class="text-center my-5">Addresses</h1>

@endsection

@section('content')
    @section('cardhead')
        Addresses
    @endsection
    <ul class="list-group">
                @foreach($addresses as $address)

                    <li class="list-group-item">
                        {{$address->city}}
                        <a class="btn btn-primary btn-sm float-right" href="addresses/{{$address->id}}">Edit</a>
                        <a class="btn btn-danger btn-sm float-right" href="api/addresses/del/{{$address->id}} ">Delete</a>

                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
        <div class="card card-default">
            <a class="btn btn-success btn-sm float-center" href="/add-address">Add</a>
        </div>
@endsection

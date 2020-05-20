@extends('layouts.app')

@section('title')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <title>Doctors</title>



@endsection

@section('header')

    <h1 class="text-center my-5">Doctors</h1>

@endsection

@section('content')
<div class="card-header">Dr. {{$hospital->hospital_name}} doctors</div>
    <ul class="list-group">
                @foreach($doctor_hospital as $docs)

                    <li class="list-group-item">
                        {{$docs->doc_name}}
                        <a class="btn btn-danger btn-sm float-right" href="/api/doctor-hospital/del/{{$hospital->id}}/{{$docs->id}} ">Delete</a>
                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
<form action="/api/store-doctor-hospital/{{$hospital->id}}" method="POST">
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Add Hospital Doctors
    </button>
    <div class="dropdown-menu checkbox-menu allow-focus " aria-labelledby="dropdownMenuButton">
    @foreach($doctors as $doctor)

        <li class="dropdown-item" >
        <label>
            <input type="checkbox" name="doc_id[]" value="{{$doctor->id}}">{{$doctor->doc_name}}
        </label>
        </li>

        @endforeach
        <li class="dropdown-item" >
        <label>
            <button class="btn btn-success btn-sm float-center" type="submit" >Add</button>
        </label>
        </li>
    </div>
    </div>
</form>
        <script>
                 $(".checkbox-menu").on("change", "input[type='checkbox']", function() {
                $(this).closest("li").toggleClass("active", this.checked);
                });

                $(document).on('click', '.allow-focus', function (e) {
                e.stopPropagation();
                });
        </script>
@endsection


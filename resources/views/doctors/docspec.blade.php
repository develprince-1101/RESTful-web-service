@extends('layouts.app')

@section('title')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <title>Doctors</title>



@endsection

@section('header')

    <h1 class="text-center my-5">Specialization</h1>

@endsection

@section('content')
<div class="card-header">Dr. {{$doctor->doc_name}} specializations</div>
    <ul class="list-group">
                @foreach($specs as $spec)

                    <li class="list-group-item">
                        {{$spec->spec_name}}
                        <a class="btn btn-danger btn-sm float-right" href="/api/docspec/del/{{$doctor->id}}/{{$spec->id}} ">Delete</a>
                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
<form action="/api/store-docspec/{{$doctor->id}}" method="POST">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Add Doctor Specialization
        </button>
        <div class="dropdown-menu checkbox-menu allow-focus " aria-labelledby="dropdownMenuButton">
            @foreach($specializations as $specialization)

                <li class="dropdown-item" >
                    <label>
                        <input type="checkbox" name="spec_id[]" value="{{$specialization->id}}">{{$specialization->spec_name}}
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


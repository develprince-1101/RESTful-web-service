@extends('layouts.app')

@section('title')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <title>Services</title>



@endsection

@section('header')

    <h1 class="text-center my-5">Services</h1>

@endsection

@section('content')
<div class="card-header"> {{$hospital->hospital_name}} services</div>
    <ul class="list-group">
                @foreach($hospital_service as $serve)

                    <li class="list-group-item">
                        {{$serve->service_name}}
                        <a class="btn btn-danger btn-sm float-right" href="/api/hospital-service/del/{{$hospital->id}}/{{$serve->id}} ">Delete</a>
                    </li>


                @endforeach
    </ul>


@endsection

@section('button')
<form action="/api/store-hospital-service/{{$hospital->id}}" method="POST">
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Add Hospital Services
    </button>
    <div class="dropdown-menu checkbox-menu allow-focus " aria-labelledby="dropdownMenuButton">
    @foreach($services as $service)

        <li class="dropdown-item" >
        <label>
            <input id="service" type="checkbox" name="service_id[]" value="{{$service->id}}" >{{$service->service_name}}
            <input id="txtbx" type="text" name="price[]" class="form-control" placeholder="Set Price"/>
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


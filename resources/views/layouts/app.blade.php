<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/submit.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('title')
</head>
<body>
    <div class="container">
    <a class="btn btn-primary btn-sm float-right" href="/">DASHBOARD</a>
        @yield('header')


        <div class="card card-default">

                @yield('content')




            </div>
    </div>


    <div class="container">
        @yield('button')
    </div>
</body>
</html>

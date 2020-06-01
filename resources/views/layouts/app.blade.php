<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - @yield('title')</title>
    <link rel="manifest" href="{{asset('/manifest.webmanifest')}}">
    <script src="{{asset('/index.js')}}" defer></script>
    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    @laravelPWA


    <!-- <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/slot999.css') }}">
    <link rel="stylesheet" href="{{ asset('css/screen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->

    <!-- Styles -->
    <style>
        html,
        body {
            
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        p{
            color:white
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }


        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .add-button {
            position: absolute;
            top: 1px;
            left: 1px;
        }
    </style>
</head>

<body class="bg-main"   data-gr-c-s-loaded="true" >
    @yield('content')

    <!-- animation banner on mobile    -->
    <!-- <script src="{{asset('js/jquery.min.js')}}" type="74f3c6db61e7884d386871d4-text/javascript"></script> -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
    <script type="74f3c6db61e7884d386871d4-text/javascript">
        var sc_project=12045380; 
        var sc_invisible=1; 
        var sc_security="546b1fa4"; 
    </script>
    

</body>

</html>
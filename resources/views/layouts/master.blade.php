<html>
<head>
    <title>{{ $title }}</title>
    {!! HTML::script('js/jquery.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::style('css/bootstrap.min.css') !!}
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body{
            background-color: #55AA55;
            font-family: 'Oswald', sans-serif;
        }
        .btn-custom {
            color: #ffffff;
            background-color: #448844;
            border-color: #448844;
        }
        .btn-custom:hover,
        .btn-custom:focus,
        .btn-custom:active,
        .btn-custom.active,
        .open .dropdown-toggle.btn-custom {
            color: #ffffff;
            background-color: #3B773B;
            border-color: #448844;
        }
    </style>
</head>
<body>
{!! $content !!}
</body>
</html>
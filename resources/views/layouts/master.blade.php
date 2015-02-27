<html>
<head>
    <title>{{ $title }}</title>
    {!! HTML::script('js/jquery.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/animate.css') !!}
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body{
            background-color: #55AA55;
            background: url("./img/test.png") no-repeat center;
            background-size: cover;
            font-family: 'Oswald', sans-serif;
        }

    </style>
</head>
<body>
{!! $content !!}
</body>
</html>
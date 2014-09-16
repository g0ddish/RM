<html>
<head>
    <title>{{ $title }}</title>
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
{{ $content }}
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $ciao }}</h1>
    <h2>
        <a href="{{ route('header') }}">Click to Header</a>
    </h2>
    <h2>
        <a href="{{ route('main') }}">Click to Main</a>
    </h2>
    <h2>
        <a href="{{ route('footer') }}">Click to Footer</a>
    </h2>
</body>

</html>

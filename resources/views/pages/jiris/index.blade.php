<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @unless(empty($jiris))
        <ul>
            @foreach($jiris as $jiri)
                <li>{{ $jiri->name }}</li>
            @endforeach
        </ul>
    @endunless
    <p><a href="/jiris/create">Create a new jiri</a></p>
</body>
</html>
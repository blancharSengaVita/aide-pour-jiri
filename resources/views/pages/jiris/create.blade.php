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
    <h1>Create a new jiri</h1>
    <form action="/jiris" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="starting_at">Starting date and time</label>
            <input type="datetime-local" name="starting_at" id="starting_at">
        </div>
        <div>
            <label for="duration">Duration in minutes</label>
            <input type="number" name="duration" id="duration" min="1" max="480" value="1">
        </div>
        <div>
            <button type="submit">Create this jiri</button>
        </div>
    </form>
</body>
</html>

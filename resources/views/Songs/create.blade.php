<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Add New Song</h1>
<form action="{{route('songs.store')}}" method="POST">
@csrf
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="title" required>

    <label for="title">Singer</label>
    <input type="text" name="singer" placeholder="Singer" required>

    <button type="submit">Add Song</button>
</form>

</body>
</html>

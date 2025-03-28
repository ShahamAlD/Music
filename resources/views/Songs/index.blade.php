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
<h1>Song List</h1>
<ul>
    @foreach($songs as $song)
        <li><a href="{{ route('songs.show', $song->id) }}">{{ $song->title }} - {{ $song->singer }}</a></li>
    @endforeach
    <div>
        <a href="{{ route('songs.create') }}">Add a Song</a>
    </div>
</ul>
</body>
</html>

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

<h1>Song Details</h1>
<p>{{ $song->title }} - {{ $song->singer }}</p>

<a href="{{ route('songs.edit', ['song' => $id]) }}">Edit Song</a>

<form action="{{route('songs.destroy', $song->id)}}" method="POST">
    @csrf
    @Method('DELETE')
<button type="submit">Delete</button>

</form>
</body>

</html>

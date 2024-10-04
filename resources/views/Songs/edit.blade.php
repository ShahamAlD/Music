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
<h1>Edit Song</h1>

<form action="{{route('songs.update', $song->id)}}" method="POST">
        @csrf
        @Method('PUT')
        <button type="submit">update</button>


<label for="song_name">Edit your song:</label>

<input type="text" id="title" name="title" value="{{ $song->title }}" required>
    <input type="text" id="singer" name="singer" value="{{ $song->singer }}" required>

    <a href="{{route('songs.create')}}"></a>
    <a href="{{route('songs.edit', ['song' => $song])}}"></a>
    <a href="{{route('songs.show', ['song' => $song])}}"></a>
</form>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo | Edit</title>
</head>
<body style="text-align: center;">
<h1>Edit TODO</h1>
<h3>
    <x-alert></x-alert>
</h3>
<form action="/update" method="post">
    @csrf
    <input type="text" name="title" @if(isset($todo)) value="{{$todo->title}}" @endif>
    <input style="display: none;" type="number" name="id" value="{{$todo->id}}">
    <input type="submit" value="Edit">
</form>
<br>
<a href="/index">Back</a>

</body>
</html>

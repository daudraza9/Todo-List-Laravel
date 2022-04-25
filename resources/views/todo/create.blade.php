<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body style="text-align: center;">
<h1>Create TODO</h1>
<h3>
    <x-alert></x-alert>
</h3>
<form action="/store" method="post">
    @csrf
    <input type="text" name="title">
    <input type="submit" value="Create">
</form>
<br>
<a href="/index"><button>Back</button> </a>

</body>
</html>

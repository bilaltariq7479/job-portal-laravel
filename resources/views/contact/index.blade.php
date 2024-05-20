<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of users</h1>
    @foreach($contacts as $abc)
    <p>{{$abc->name;}}</p>
    @endforeach
</body>
</html>
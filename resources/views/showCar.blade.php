<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Car</title>
</head>
<body>

    <h1> {{$cars->title}}</h1>
    <h5> {{$cars->created_at}}</h5>
    <h5> {{$cars->updated_at}}</h5>
    <p> {{$cars->description}}</p>
    <p> {{$cars->image}}</p>
    <p>{{ $cars->published? "Published" : "Not Published" }}</p>

</body>
</html>
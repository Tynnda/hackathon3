<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('header')
    <h1>Search</h1>
    <form action="/search" method="get">
        <input type="text" name="search" id="search" placeholder="name of a movie">
        <button type="submit">search</button>
    </form>
    <br>
    @foreach ($results as $result)
    <ul>
        <li>
            <a href="/search/list/details/{{$result->id}}">{{$result->first_name}} {{$result->surname}}</a>

        </li>
    </ul>
        
    @endforeach


</body>
</html>
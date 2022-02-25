<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Registration</h1>
    <form action="{{ action('App\Http\Controllers\VeterinaryController@store') }}" method="post">
        @csrf
        <input type="hidden" name="id">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" required>
        <br>
        <br>
        <label for="">Surname</label>
        <input type="text" name="surname" required>
        <br>
        <br>
        <label for="">Email</label>
        <input type="text" name="email" required>
        <label for="">Phone</label>
        <input type="text" name="phone" required>
        <label for="">Address</label>
        <input type="text" name="address" required>
        <input type="submit" value="save">
    </form>
    <br>
    <br>


    <h1>Search</h1>
    <form action="/search/list" method="get">
        <input type="text" name="search" id="search" placeholder="name of a movie">
        <button type="submit">search</button>
    </form>
</body>
</html>
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
    <h1>{{$details->first_name}} {{$details->surname}}</h1>
    <p><strong>phone: </strong><span>{{$details->phone}}</span></p>
    <p><strong>email: </strong><span>{{$details->email}}</span></p>
    <p><strong>address: </strong><span>{{$details->address}}</span></p>
    <br>
    <a href="{{ url('edit/' . $details->id)}}">EDIT</a>
    <form action="{{ action('App\Http\Controllers\VeterinaryController@delete', ['id' => $details->id]) }}" method ="post">
        
        @csrf

        @method('DELETE')
        <input type="submit" value="delete">


    </form>



    
    @foreach ($details->animals as $animal)
{{-- 
    {{dd($details)}} --}}

    <h2><strong>pet name:</strong><span>{{$animal->name}}</span></h2>
    <img src="/images/pets/{{$animal->image->path}}" alt="image">


    {{-- @foreach($details->) --}}


    <p><strong>age:</strong><span>{{$animal->age}}</span></p>
    <p><strong>weight:</strong><span>{{$animal->weight}}</span></p>
    <p><strong>breed:</strong><span>{{$animal->breed}}</span></p>
    <p><strong>species:</strong><span>{{$animal->species}}</span></p>
        
    @endforeach
    
</body>
</html>
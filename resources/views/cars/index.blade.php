<!doctype html>
<html>
    <head>
        
        <title>cars</title>
    
    </head>
    <body>
       
        <ul>
            @foreach($cars as $car)
            <li><a href="{{ route('single-car',[ 'id' => $car->id]) }}" > {{ $car->title }} </a> </li>
            @endforeach
        </ul>

    </body>
</html>

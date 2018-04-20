<!doctype html>
<html>
    <head>
        
        <title>cars</title>
    
    </head>
    <body>
       
        <ul>
            @foreach($cars as $car)
            <li>  {{ $car->title }}  </li>
            @endforeach
        </ul>

    </body>
</html>

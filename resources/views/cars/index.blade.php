@extends('layouts.master')
@section('content')
        

    
       <div class="cars">
      
    @foreach($cars as $car)
          <li><a href="{{ route('single-car',[ 'id' => $car->id]) }}" > {{ $car->title }} </a></li>
           
     
       </div>
    @endforeach
@endsection

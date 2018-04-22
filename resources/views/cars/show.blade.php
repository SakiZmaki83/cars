@extends('layouts.master')

@section('title')
    {{$car->title}}
@endsection
    
        <h3><a href ="{{ route('cars') }}" >{{ $car->title }} </a> </h3>
        
            <p> The car {{ $car->title }} is producted by {{ $car->producer }}. <br>
                This model has {{$car ->number_of_doors}} doors.
                
            </p>
    

    
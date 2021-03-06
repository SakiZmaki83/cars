<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

  </head>

    @include('partials.header')


    <div class="container">

      <div class="row">
        <div class="col-sm-8 blog main">
        @yield('content')
        </div>

     
     

        <div class="col-sm-16  blog sidebar">
   @include('partials.sidebar', compact('tags'))
   </div>

      </div><!-- /.row -->
     
    </div><!-- /.container -->
  

    @include('partials.footer')


 

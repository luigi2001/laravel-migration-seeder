<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>agenzia di viaggi...</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div class="text-center">
        <h1>agenzia di viaggi....</h1>
        <h2>i nostri pacchetti di viaggio:</h2>
    </div>
@foreach($trips as $trip)
        <div class="card">
  <div class="card-header">
    {{$trip->periodo}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$trip->destinazione}}</h5>
    <p class="card-text">{{$trip->programma_di_viaggio}}</p>
    <a href="#" class="btn btn-primary">{{$trip->prezzo_per_persona}}</a>
  </div>
</div>
@endforeach
<div>
    {{$trips->links()}}
</div>
    </body>
</html>

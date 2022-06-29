<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trains DB</title>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
  <div class="container">
    <ul>
      @foreach ($trains as $train)
          <li>
              <h1>{{ $train->company }}</h1>
              <h2>Codice Treno: {{ $train->train_code }}</h2>
              <h3>Partenza da: {{ $train->departure_station }}</h3>
              <span>Giorno: {{\Carbon\Carbon::parse($train->day_of_departure)->format('d/M/Y')}} Alle ore: {{\Carbon\Carbon::parse($train->time_departure)->format('H:i')}}</span>
              <h3>Arrivo a: {{ $train->arrival_station }}</h3>
              <span>Alle ore: {{\Carbon\Carbon::parse($train->time_arrival)->format('H:i')}}</span>
              <div>Numero vagoni: {{ $train->wagons_number }}</div>
              @if ($train->on_time)
              <h5 class="ok">In Orario</h5> 
              @else     
              <h5 class="warning">In Ritardo</h5>            
              @endif
              @if ($train->cancelled)
              <h2 class="alert">Cancellato</h2>
              @endif
          </li>
      @endforeach
    </ul>  
  </div>
</body>
</html>
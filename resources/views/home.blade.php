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
              <h2>{{ $train->company }} Codice Treno: {{ $train->train_code }}</h2>
              <h3>Partenza da: {{ $train->departure_station }}</h3>
              <span>Il: {{ $train->day_of_departure }} Alle ore: {{ $train->time_departure}}</span>
              <h3>Arrivo a: {{ $train->arrival_station }}</h3>
              <span>Alle ore: {{ $train->time_arrival}}</span>
              <span>Numero vagoni: {{ $train->wagons_number }}</span>
          </li>
      @endforeach
    </ul>  
  </div>
</body>
</html>
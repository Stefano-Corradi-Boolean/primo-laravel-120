@php
  // qui scrivo codice e logica PHP
  // è meglio evitare perché la logica la si sviluppa nel controller
  $nome_dichiarato_nella_view = 'Giuseppe';

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hallo Laravel</title>
</head>
<body>

  <div class="container my-5 ">
    <h1>Ciao Laravel</h1>
    <h1>Home</h1>

    {{-- le variabili vendono stampate con {{ }} e sono i nomi delle chiavi cell'array che viene passato con view() --}}
    <h2>Ciao {{ $name }} {{ $lastname }} e {{ $nome_dichiarato_nella_view }}</h2>

    @if($stampa_paragrafo)
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptas similique nesciunt, voluptatibus minus qui, quod labore ab atque recusandae, perferendis magni numquam voluptatum quia rem inventore eum reiciendis. Maxime.
      </p>
    @else
      <h3>Non devo stampare il paragrafo</h3>
    @endif

    @if ($num1 > $num2)
      <h5>Numero 1 è maggiore di numero 2</h5>
    @elseif ($num1 < $num2)
      <h5>Numero 1 è minore di numero 2</h5>
    @else
      <h5>Numero 1 e numero 2 sono uguali</h5>
    @endif

    <ul>
      @foreach ($colori as $colore)
        <li>
          {{ $loop->iteration }} -
          @if($loop->first) Primo elemento:  @endif
          @if($loop->last)  Ultimo elemento: @endif
           {{ $colore }}
        </li>
      @endforeach
    </ul>

  </div>
  
</body>
</html>
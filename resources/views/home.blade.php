{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container my-5">

    <h1>PACCHETTI DI VIAGGIO</h1>

    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Destinazione</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Giorni</th>
            <th scope="col">Alloggio</th>
            <th scope="col">Trasporto</th>
            <th scope="col">Luogo di Partenza</th>
            <th scope="col">Data di partenza</th>
            <th scope="col">Data di Ritorno</th>
            <th scope="col">Max Partecipanti</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">

            @foreach ($packages as $package)

            <tr>
                <th> {{$package->destination}} </th>
                <td> {{ $package->description }} </td>
                <td> {{ $package->price }} € </td>
                <td> {{ $package->days }} </td>
                <td> {{ $package->accommodation }} </td>
                <td> {{ $package->transport }} </td>
                <td> {{ $package->departure_location }} </td>
                <td> {{ $package->departure_date }} </td>
                <td> {{ $package->return_date }} </td>
                <td> {{ $package->max_participants }} </td>
            </tr>

            @endforeach
        </tbody>
      </table>

</div>



@endsection



{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container my-5">

    <h1>TRAINS</h1>

    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Train Code</th>
            <th scope="col">Company</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">On Time</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Carriage Number</th>
            <th scope="col">Cancelled</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($trains as $train)

                <tr>
                    <th>  {{ $train->train_code }} </th>
                    <td>  {{ $train->company }} </td>
                    <td>  {{ $train->departure_time }} </td>
                    <td>  {{ $train->arrival_time }} </td>
                    <td>  {{ $train->on_time }} </td>
                    <td>  {{ $train->departure_station }} </td>
                    <td>  {{ $train->arrival_station }} </td>
                    <td>  {{ $train->carriage_number }} </td>
                    <td>  {{ $train->cancelled }} </td>
                </tr>

            @endforeach
        </tbody>
      </table>

</div>



@endsection



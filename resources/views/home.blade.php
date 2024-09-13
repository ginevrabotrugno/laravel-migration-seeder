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

                    @php
                        $departure_date = date_create($train->departure_time);
                        $arrival_date = date_create($train->arrival_time);
                    @endphp

                <tr>
                    <th>  {{ $train->train_code }} </th>
                    <td>  {{ $train->company }} </td>
                    <td>  {{ date_format($departure_date, "d/m/Y H:i") }} </td>
                    <td>  {{ date_format($arrival_date, "d/m/Y H:i") }} </td>
                    <td>  {!! $formatBoolean($train->on_time) !!} </td>
                    <td>  {{ $train->departure_station }} </td>
                    <td>  {{ $train->arrival_station }} </td>
                    <td>  {{ $train->carriage_number }} </td>
                    <td>  {!! $formatBoolean($train->cancelled) !!} </td>
                </tr>

            @endforeach
        </tbody>
      </table>

</div>



@endsection



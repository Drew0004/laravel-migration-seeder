@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container">
    <h1>
        Trains
    </h1>
    <div class="row">
        @foreach ($trains as $train)
            <div class="card my-2">
                <div class="card-body">
                    <ul class="my-3">
                        <li>Nome azienda:{{ $train->agency_name }}</li>
                        <li>Stazione di partenza:{{ $train->departure_station }}</li>
                        <li>Stazione di arrivo:{{ $train->arrival_station }}</li>
                        <li>Data partenza:{{ $train->departure_date }}</li>
                        <li>Data arrivo:{{ $train->arrival_date }}</li>
                        <li>Codice treno:{{ $train->train_code }}</li>
                        <li>Numero vagoni:{{ $train->wagons_number }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

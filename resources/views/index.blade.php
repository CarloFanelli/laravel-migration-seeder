@extends('layouts.app')

@section('title', 'Trains Trip')

@section('content')

    <div class="container my-4">
        <div class="row">

            @forelse ($all_trains as $train)
                <div class="col-6 col-md-4 col-lg-4 g-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Company: {{ $train->company }}</h5>
                            <p class="m-0">from: {{ $train->departure_station }}</p>
                            <p class="m-0">to: {{ $train->arrival_station }}</p>
                        </div>
                        <div class="card-body">
                            <p class="m-0">start: <strong>{{ $train->departure_time }}</strong></p>
                            <p class="m-0">arrive: <strong>{{ $train->arrival_time }}</strong></p>
                            <p class="m-0">in time? <strong><?= $train->in_time ? 'yes' : 'no' ?></strong></p>
                            <p class="m-0">deleted? <strong><?= $train->deleted ? 'yes' : 'no' ?></strong></p>
                        </div>
                        <div class="card-footer">
                            <p>train code: {{ $train->train_code }}</p>
                            <p>
                                number of carriage: {{ $train->carriage_number }}
                            </p>
                        </div>


                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>

@endsection

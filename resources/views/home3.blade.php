@php
    $array = [
        [
            'misura' => '205/55/16',
            'marca' => 'Hankook',
            'modello' => 'Kinergy 4S',
            'prezzo' => '95€',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Continental',
            'modello' => 'AllSeason Contact',
            'prezzo' => '98€',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Pirelli',
            'modello' => 'Cinturato AllSeason',
            'prezzo' => '105€',
        ],
    ];

@endphp

@include('shared.nav')

<h1>Pneumatici 4 Stagioni</h1>

<div>
    @foreach ($array as $data)
        <div>
            <p> {{ $data['marca'] }} </p>
            <p> {{ $data['modello'] }} </p>
            <p> {{ $data['misura'] }} </p>
            <p> {{ $data['prezzo'] }} </p>
        </div>
    @endforeach
</div>

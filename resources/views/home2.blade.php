@php
    $array = [
        [
            'misura' => '205/55/16',
            'marca' => 'Hankook',
            'modello' => 'Ventus V12 evo',
            'prezzo' => '90€',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Continental',
            'modello' => 'Premium Contact 6',
            'prezzo' => '95€',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Pirelli',
            'modello' => 'P Zero Nero',
            'prezzo' => '98€',
        ],
    ];

@endphp

@include('shared.nav')

<h1>Pneumatici Estivi</h1>

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

@php
    $array = [
        [
            'misura' => '205/55/16',
            'marca' => 'Hankook',
            'modello' => 'W452',
            'prezzo' => '80€',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Continental',
            'modello' => 'TS860',
            'prezzo' => '90€',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Pirelli',
            'modello' => 'SottoZero 3',
            'prezzo' => '95€',
        ],
    ];

@endphp

@include('shared.nav')

<h1>Pneumatici Invernali</h1>

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

<h1>HELLO WORLD!!</h1>

@php
    $array = [
        [
            'misura' => '205/55/16',
            'marca' => 'Hankook',
            'modello' => 'W452',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Continental',
            'modello' => 'TS860',
        ],
        [
            'misura' => '205/55/16',
            'marca' => 'Pirelli',
            'modello' => 'SottoZero 3',
        ],
    ];

@endphp

<h1>Pneumatici Invernali</h1>

<div>
    @foreach ($array as $data)
        <div>
            <p> {{ $data['marca'] }} </p>
            <p> {{ $data['modello'] }} </p>
            <p> {{ $data['misura'] }} </p>
        </div>
    @endforeach
</div>

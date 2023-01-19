<h2>{{$greeting}} {{$user['name']}} {{$user['surname']}}</h2>

{{-- Stampiamo elenco random --}}
@php
    foreach ($array as $elemento) {
        $rannum = rand(1,100);
        echo $elemento, $rannum;
    }
@endphp
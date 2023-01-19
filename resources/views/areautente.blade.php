<h2>Benvenuto nella tua area utente, {{$user['name']}} {{$user['surname']}}</h2>

<h3>Linguaggi di programmazione</h3>
{{-- Stampiamo elenco random --}}
@php
    foreach ($array as $elemento) {
        $rannum = rand(1,100);
        echo $rannum . ' ' . $elemento;
    }
@endphp
<br>
<a href="contatti">Vai ai contatti</a>
<a href="homepage">Torna alla homepage</a>
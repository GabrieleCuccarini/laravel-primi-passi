{{-- Stampiamo elenco random --}}

<h1>Header menu</h1>
<a href="userarea">Area utente</a>
<a href="contatti">Area contatti</a>
<a href="paginapercuriosi">Area segreta</a>

@php
    foreach ($array as $elemento) {
        $rannum = rand(1,100);
        echo $elemento, $rannum;
    }
@endphp
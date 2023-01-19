<h2>Mi presento, sono {{$user['name']}} {{$user['surname']}}</h2>

<h3>Contattami al 

@php

$i=0;
while ($i < 9) {
        $rannum = rand(0, 9);
        echo $rannum;
        $i++;
    }
@endphp</h3>
<br>
<a href="userarea">Torna all'area utente</a>
<br>
<a href="homepage">Torna alla homepage</a>
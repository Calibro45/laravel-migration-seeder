<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    
    <h1>Treni</h1>

    <ol>
        @foreach ($trains as $train)

            <li>
                partenza da: {{ $train->stazione_di_partenza }} <br>
                arrivo a: {{ $train->stazione_di_arrivo }} <br>
                data partenza: {{ $train->data_partenza }} <br>
                orario partenza: {{ $train->orario_partenza }} <br>
                orario arrivo: {{ $train->orario_arrivo }} <br>
                treno N. {{ $train->codice_treno }} <br>
                prezzo € {{ $train->prezzo_biglietto }}
            </li>
        
        @endforeach
    </ol>

</body>
</html>
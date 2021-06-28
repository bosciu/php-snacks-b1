<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [[
        "squadraCasa" => "Cortemaggiore",
        "squadraOspite" => "Piacenza",
        "squadraCasaPunti" => 60,
        "squadraOspitePunti" => 52

    ],
    [
        "squadraCasa" => "Fiorenzuola",
        "squadraOspite" => "Alseno",
        "squadraCasaPunti" => 68,
        "squadraOspitePunti" => 66
    ],
    [
        "squadraCasa" => "San Fiorano",
        "squadraOspite" => "Coli",
        "squadraCasaPunti" => 56,
        "squadraOspitePunti" => 68
    ],
    [
        "squadraCasa" => "Vigoleno",
        "squadraOspite" => "Carpaneto",
        "squadraCasaPunti" => 60,
        "squadraOspitePunti" => 60
    ],
    [
        "squadraCasa" => "Baselica",
        "squadraOspite" => "San Rocco",
        "squadraCasaPunti" => 70,
        "squadraOspitePunti" => 48
    ]];

    echo "<ul>";
        for ($i=0; $i < count($partite); $i++) { 
            ["squadraCasa" => $squadraCasa, "squadraOspite" => $squadraOspite, "squadraCasaPunti" => $puntiCasa, "squadraOspitePunti" => $puntiGuest] = $partite[$i];
            echo "<h1>$squadraCasa - $squadraOspite | $puntiCasa - $puntiGuest <h1/>";
        };
    echo "</ul>";
?>
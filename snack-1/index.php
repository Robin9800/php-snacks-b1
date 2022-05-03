<!--Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60-->
<?php
    $partite = [
        [
            'squadra casa' => 'Napoli',
            'squadra ospite' => 'Roma',
            'punti casa' => '12',
            'punti ospite' => '30'
        ],
        [
            'squadra casa' => 'Lazio',
            'squadra ospite' => 'Milan',
            'punti casa' => '30',
            'punti ospite' => '30'
        ],
        [
            'squadra casa' => 'Inter',
            'squadra ospite' => 'Atalanta',
            'punti casa' => '132',
            'punti ospite' => '23'
        ],
       
    ];
    for($i; $i < count($partite); $i++){
        $partita = $partite[i];
        echo('<p>' . $partita['squadra casa'] . '-' . $partita['squadra ospite'] . '|' . $partita['punti casa'] .'-'. $partita['punti ospite'] . '</p>');
    }
?>
<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
// che name sia più lungo di 3 caratteri,
// che mail contenga un punto e una chiocciola e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$richiestaNome = $_GET['name'];
$richiestaMail= $_GET['mail'];
$richiestaAnni= $_GET['age'];

if(strlen($richiestaNome) > 3 && filter_var($richiestaMail, FILTER_VALIDATE_EMAIL) && is_numeric($richiestaAnni)){
    echo('<h2>'.'Accesso riuscito'.'</h2>');
    echo('<p>'. $richiestaNome .'</p>');
    echo('<p>'. $richiestaMail .'</p>');
    echo('<p>'. $richiestaAnni .'</p>');
}else{
    echo('<h2>'.'Accesso negato'.'</h2>');
}
?>
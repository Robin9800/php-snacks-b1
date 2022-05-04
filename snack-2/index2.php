<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
// che name sia più lungo di 3 caratteri,
// che mail contenga un punto e una chiocciola e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

// Passare come parametri GET name, mail e age
$name = $_GET['name'];
$mail= $_GET['mail'];
$age= $_GET['age'];

if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)){
    echo('<h2>'.'Accesso riuscito'.'</h2>');
    echo('<p>'. $name .'</p>');
    echo('<p>'. $mail .'</p>');
    echo('<p>'. $age .'</p>');
}else{
    echo('<h2>'.'Accesso negato'.'</h2>');
}
?>

<!--ACTION minvia i dati da qualche parte, in questo caso li invierà sempre sulla pagina. POST si usa quando si passano informazioni sensibili-->
<form action='index2.php' method='get'>
    <input type='text' required name='name'/>
    <input type='text' name='mail'/>
    <input type='number' name='age'/>
    <input type =submit />
</form>
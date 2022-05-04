<?php
//Creare un array con 15 numeri casuali
//tenere conto che l’array non deve contenere lo stesso numero più di una volta

$numbers = [];
for($i = 0; count($numbers) < 15; $i++){
    $number = rand(1,100);
    if(!in_array($number, $numbers)){
        $numbers[]= $number;
    }  
} echo('<pre>');
var_dump($numbers);
echo('</pre>');
?>
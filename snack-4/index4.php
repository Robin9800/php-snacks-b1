<?php
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
// Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$paragraf = 'Anche se prendessi un ergastolo sto con te. Finché non mi seppelliscono sto con te. Voglio viver sempre il brivido di star con te';
$separetedParagraf = explode('.',$paragraf);
echo('<h1>Finchè non mi seppelliscono</h1>');
for($i= 0; $i < count($separetedParagraf); $i++){
    echo('<p>' . $separetedParagraf[$i] . '</p>');
}
?>
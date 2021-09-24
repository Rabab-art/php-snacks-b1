<!-- BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

$data = $_GET;

if (empty($data['name']) || empty($data['mail']) || empty($data['age'])) {
    echo 'ERROR';
    echo '<br/>';
    echo 'ACCESSO NEGATO';
} else if (strlen($data['name']) <= 3) {
    echo 'NOME INFERIORE E TRE CARATTERI';
    echo '<br/>';
    echo 'ACCESSO NEGATO';
} else if (strpos($data['mail'], '.') < 1 || strpos($data['mail'], '@') < 1) {
    echo 'MAIL NON VALIDA';
    echo '<br/>';
    echo 'ACCESSO NEGATO';
} else if (!is_numeric($data['age'])) {
    echo 'CARATTERE NON VALIDO';
    echo '<br/>';
    echo 'ACCESSO NEGATO';
} else {
    echo 'ACCESSO RIUSCITO';
}

















?>
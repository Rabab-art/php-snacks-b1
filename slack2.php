<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.


BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
SUPER BONUS: Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida") -->
<?php $students = [
    [
      'nome' => 'Lola',
      'cognome' => 'Pina',
      'media'  => 6.5,
    ],
    [
      'nome' => 'Amira',
      'cognome' => 'Elsamir',
      'media' => 8,
    ],
    [
        'nome' => 'Youssef',
        'cognome' => 'Buras',
        'media' => 7,
      ],
      [
        'nome' => 'Fatima',
        'cognome' => 'Ricci',
        'media' => 9,
      ],

];

$somma = array_sum($students);
  ?>

  <ul>
    <?php for ($i = 0; $i < count($students); $i++) { ?>
      <li>
        <h2><?= $students[$i]['nome'] . ' ' . $students[$i]['cognome'] ?></h2>
        <small><?= $students[$i]['age'] ?></small>
      </li>

      <?php $media=$somma/ count ($students); ?>


    <?php echo 'La media è:' . $media} ?>
  </ul>


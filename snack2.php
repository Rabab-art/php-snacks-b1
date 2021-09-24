<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici senza, materia, solo numeri. Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.



SUPER BONUS: Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida") -->
<?php
 $students = [
    [
      'nome' => 'Lola',
      'cognome' => 'Pina',
      'voti'  => [6,4,8,3],
    ],
    [
      'nome' => 'Amira',
      'cognome' => 'Elsamir',
      'voti'  => [6,8,6,7],
    ],
    [
        'nome' => 'Youssef',
        'cognome' => 'Buras',
        'voti'  => [5,8,9,3],
      ],
      [
        'nome' => 'Fatima',
        'cognome' => 'Ricci',
        'voti'  => [6,6,9,3],
      ],

];

  ?>

  <ul>
    <?php for ($i = 0; $i < count($students); $i++) { ?>
      <li>
        <h2><?= $students[$i]['nome'] . ' ' . $students[$i]['cognome'] ?></h2>
        <small>
          <?php  
          $media = array_sum($student[$i]["voti"]) / count($student[$i]["voti"] );
          
          ?>
        <?php echo $media; ?>
      
      </small>
      </li>

  </ul>




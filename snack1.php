<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero
 più di una volta. Stampare i numeri in pagina. -->


<?php
// $common = array();
// shuffle($comman); formula per mischiare


//generate 116 random numbers in the range of 35-74 in an array called $common
// for ($i = 0; $i < 15; $i++) {
//     $common[] = rand(1, 100);

//     echo $common[$i] . "<br /> ";
// };


// function randomNumber($min,$max)
// {
//     // range restituisce in ordine una serie di numeri da un min a un max
//     $numbers = range($min,$max);

//     shuffle($numbers);
//     $result[]=array_slice($randomNumber, $numbers):{}
// }

$randomNumber = array();

while (count($randomNumber) < 15) {
    $number = rand(1, 15);
    if (!in_array($number, $randomNumber)) {
        array_push($randomNumber, $number);
        // echo $number .'<br/>' ;
    }
};

// var_dump($randomNumber);
 for ($i = 0; $i < 15; $i++){
    echo $randomNumber[$i] . '<br/>';
} 

?>
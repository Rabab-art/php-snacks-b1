<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero
 più di una volta. Stampare i numeri in pagina. -->


 <?php 
$common = array();
shuffle($comman);


//generate 116 random numbers in the range of 35-74 in an array called $common
for($i = 0; $i < 15; $i++){
    $common[] = mt_rand(1, 100);
    
    echo $common[$i] . "<br /> ";
}

 ?>
<!-- 

  ## Snack 4
  Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

--->
<?php 


  function numeroRandom($min, $max, $randomNumbersAmount) {

    $numbersArray = [];

    while(count($numbersArray) < $randomNumbersAmount){

      $numero = rand($min, $max);

      if(!in_array($numero, $numbersArray)) {

        $numbersArray[] = $numero;

      }

    }

    return $numbersArray;  

  }


$arrayRandom = numeroRandom(1,100,15);


echo var_dump($arrayRandom);

?>

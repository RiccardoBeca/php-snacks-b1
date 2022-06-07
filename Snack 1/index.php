<!-- 

  ## Snack 1
  
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

 -->


 <?php
 
 
 $partiteBasket = [

  [
    'home' => 'Stella Azzurra', 
    'away' => 'Dinamo Mosca',
    'points' => [

      'homePoints' => '130', 
      'awayPoints' => '40'

    ]
  ],
  [
    'home' => 'Dynamo Bucarest', 
    'away' => 'Barcellona',
    'points' => [

      'homePoints' => '130' ,
      'awayPoints' => '40'

    ]
  ],[
    'home' => 'Real Madrid', 
    'away' => 'Armani Milano',
    'points' => [

      'homePoints' => '130', 
      'awayPoints' => '40'

    ]
  ],[
    'home' => 'Lido dei Pini', 
    'away' => 'Pomezia',
    'points' => [

      'homePoints' => '130', 
      'awayPoints' => '40'

    ]
  ],

];
 
var_dump($partiteBasket)
 
 
 
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<ul>
    <?php for($i = 0; $i < count($partiteBasket[$i]); $i++): ?> 

        <li><?php echo $partiteBasket[$i]['home'] . ' - ' . $partiteBasket[$i]['away'] . ' | ' . $partiteBasket[$i]['points']['homePoints'] . ' - ' . $partiteBasket[$i]['points']['awayPoints'] ?></li>
        
      <?php endfor;?>
  </ul>

</body>
</html>


<!-- 
  SNACK 2

  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

 -->

 <?php 
 
 $isAuthorised = true;
 $errore = '';
 
 if(empty($_GET['nome']) or empty($_GET['mail']) or empty($_GET['age'])) {
   
   $isAuthorised = false;
   $errore = 'Perfavore inserisci tutti i dati richiesti';
   
  } elseif (strlen($_GET['nome']) < 3 ) {
    
    $isAuthorised = false;
    $errore = 'Perfavore inserisci almeno 3 lettere nel tuo nome';
    
  } elseif (!strpos($_GET['mail'], '@') or !strpos($_GET['mail'], '.')) {
    
    $isAuthorised = false;
    $errore = "La mail deve contenere '@'e '.'";
    
  } elseif (!is_numeric($_GET['age'])) {
    
    $isAuthorised = false;
    $errore = 'Perfavore inserisci un numero';
    
  }
  
  var_dump($_GET);

if($isAuthorised){

  $output = 'Ok, sei autorizzato!';

} else {

  $output = 'Mi dispiace non sei autorizzato!';

}
 
 
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
  <h1>MAIL CONTROL</h1>
  <h2><?php echo $output ?></h2>

  <?php if(!$isAuth): ?>
    <i>Errore: <?php echo $error ?></i>
  <?php endif; ?>

</body>
</html>
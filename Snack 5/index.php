<!-- 
  SNACK 5
  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

-->

<?php

 $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nesciunt quaerat debitis recusandae, qui, blanditiis deserunt impedit esse quisquam enim quos animi maxime maiores eveniet officiis aspernatur quo molestiae aut eligendi quia provident alias unde harum. Quidem blanditiis similique quas beatae eos repellat facilis commodi impedit. Maiores, illum? Culpa reiciendis ipsa earum ullam, quod quia nobis consectetur necessitatibus voluptates doloremque. Porro dolorum quos labore sint consequuntur dolorem, tempore in itaque nam a! Quas non repudiandae optio, dolorum dignissimos veritatis corrupti ipsa consequuntur, numquam minima alias tenetur delectus aliquid odit consequatur dolores animi fuga neque vitae qui est eum, ullam pariatur? Enim laborum adipisci aut ipsa odit eveniet consequatur, doloremque illum tenetur possimus quibusdam, eos ducimus eligendi placeat nulla voluptatibus expedita saepe. Et ratione cum numquam quidem odit, consequuntur natus culpa consequatur dolor minus nihil fugit? Rerum suscipit magnam quae quibusdam, quos incidunt tenetur dolor itaque officia ipsum adipisci nostrum expedita assumenda vitae odit nulla eveniet nemo optio quod impedit unde, corporis quisquam temporibus in. Quis praesentium a deserunt incidunt molestias ullam cum aspernatur eligendi sed eos saepe facilis fuga neque cumque impedit aliquid ipsa, atque facere ratione quasi, laudantium soluta. Officia expedita dolores repellat sit possimus et sapiente molestiae minus nulla harum quaerat fugiat illum temporibus inventore ea beatae, laborum debitis nesciunt architecto commodi! Fugit quae, reiciendis quis molestias ex itaque! Tempora natus consectetur in. Nihil deserunt rerum voluptatibus rem nemo veritatis excepturi natus sint repellat culpa assumenda ratione, quibusdam, dolores a blanditiis facilis earum optio. Ad cumque sint dolorem. Quod aspernatur, eum maxime similique minima dolore iure vero molestias, tempore repellendus reiciendis, est libero voluptatibus esse ipsum architecto sint ab dolor tenetur voluptate exercitationem facere blanditiis error. Neque vero doloribus illo hic at recusandae commodi dicta reprehenderit libero quidem tempore eaque quia praesentium sapiente natus maiores, quod sunt ipsam.';

 $paragrafoesploso = explode('.', $paragrafo);

 echo var_dump($paragrafoesploso);        

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
  <h1><?php echo $paragrafo ?></h1>
  <ul>
    <?php for($i = 0; $i < count($paragrafoesploso); $i++): ?> 

        <li><?php echo $paragrafoesploso[$i] ?></li>
        
      <?php endfor;?>
  </ul>
</body>
</html>
 

<?php
  require_once './product.php';
  require_once './user.php';

  $dora = new PremiumUser('doraB','prova123','Dora','Budić','07/06/1989','1234-56789','07/22','456');

  $louboutin = new Shoes('Pigalle','Christian Louboutin','575€','10%',true,35,'black');
  var_dump($louboutin);

  $dora->insertProduct($louboutin);
  var_dump($dora);
?>

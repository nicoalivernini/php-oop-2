<?php

  require_once './utente.php';
  require_once './prodotto.php';
  require_once './servizio.php';

  $prodotto1 = new Prodotto('Cosmetico', 'Mascara', 'Kiko', '11,5ml', 'Made in China', '9.99', 'Cura della persona', 'Disponibile');
  $prodotto2 = new Prodotto('Vestiario', 'T-shirt', 'H&M', 'M', 'Made in China', '19.99', 'Cura della persona', 'Non disponibile');

  var_dump($prodotto);
 ?>

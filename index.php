<?php

  require_once './utente.php';
  require_once './prodotto.php';
  require_once './servizio.php';

  $prodotto1 = new Prodotto('Cosmetico', 'Mascara', 'Kiko', '11,5ml', 'Made in China', '9.99', 'Cura della persona', 'Disponibile');
  $prodotto2 = new Prodotto('Vestiario', 'T-shirt', 'H&M', 'M', 'Made in China', '19.99', 'Cura della persona', 'Non disponibile');

  $servizio1 = new Servizio('Marketing', 'Facebook ADS', '2 mesi', '249.99', 'Robert Gnu', 'Disponibile');
  $servizio2 = new Servizio('Cura della casa', 'Cura il tuo orto', '15 ore', 'Free', 'Trore poil', 'Disponibile');

  var_dump($prodotto1, $prodotto2, $servizio1, $servizio2);


 ?>

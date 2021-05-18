<?php

  require_once './utente.php';
  require_once './prodotto.php';
  require_once './carta-di-credito.php';
  require_once './felpa.php';


  $nico = new Utente('Nicolo', 'Alivernini', 'Maschio', '19-09-1995');
  $felpa = new Felpa('H&M', 'L', '19.99', 'Felpa', 'Made in China', 'Vestiti', 'Disponibile');

  $carta_di_credito = new CartaDiCredito('5000-000-000-000', 'Nicolò Alivernini', '05-08', 'Mastercard', '000');
  $nico->setCartaDiCredito($carta_di_credito);

  var_dump($nico, $felpa);


 ?>

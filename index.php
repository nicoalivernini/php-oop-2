<?php

  require_once './utente.php';
  // require_once './prodotto.php';
  // require_once './felpa.php';


  $nico = new Utente('Nicolo', 'Alivernini', 'Maschio', '19-09-1995', 'Carta di credito', '5333-0000-0000-0000', 'Nicolò Alivernini', '05-24', 'Mastercard', '123');
  // $prodotto1 = new Felpa('H&M', 'L', '19.99', 'Felpa', 'Made in China', 'Vestiti', 'Disponibile');

  // $prodotto2 = new Prodotto('Vestiario', 'T-shirt', 'H&M', 'M', 'Made in China', '19.99', 'Cura della persona', 'Non disponibile');

  var_dump($nico, $prodotto1);


 ?>

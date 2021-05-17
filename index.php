<?php

  require_once './utente.php';
  require_once './prodotto.php';
  require_once './carta-di-credito.php';


  $nico = new Utente('Nicolo', 'Alivernini', 'Maschio', '19-09-1995', 'Carta di credito', '5333-0000-0000-0000', 'Nicolò Alivernini', '05-24', 'Mastercard', '123');
  $felpa= new Felpa('Felpa', 'Made in China', 'Vestiti', 'Disponibile', 'H&M', 'L', '19.99');


  var_dump($nico, $felpa);


 ?>

<?php

  require_once './prodotto.php';

  class Felpa extends Prodotto {
    private $marca;
    private $misura;
    private $prezzo;

    public function __construct($marca, $misura, $prezzo, $tipologia, $fabbricazione, $categoria, $status) {
      $this->marca = $marca;
      $this->misura = $misura;
      $this->prezzo = $prezzo;
      parent::__construct($tipologia, $fabbricazione, $categoria, $status);
    }

    // Marca
    public function setMarca($marca) {
      $this->marca = $marca;
    }


    public function getMarca() {
      return $marca->marca;
    }

    // Misura
    public function setMisura($misura) {
      $this->misura = $misura;
    }

    public function getMisura() {
      return $misura->misura;
    }

    // Prezzo
    public function setPrezzo($prezzo) {
      $this->prezzo = $prezzo;
    }

    public function getPrezzo() {
      return $prezzo->prezzo;
    }

  } // Chiusura Felpa
 ?>

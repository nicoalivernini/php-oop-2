<?php

  class Felpa extends Prodotto {
    public $marca;
    public $misura;
    public $prezzo;

    public function __construct($marca, $misura, $prezzo) {
      $this->marca = $marca;
      $this->misura = $misura;
      $this->prezzo = $prezzo;
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

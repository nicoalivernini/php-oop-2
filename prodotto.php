<?php

  class Prodotto {
    private $tipologia;
    private $fabbricazione;
    private $categoria;
    private $status;

    // Construct
    public function __construct($tipologia, $fabbricazione, $categoria, $status) {
      $this->tipologia = $tipologia;
      $this->fabbricazione = $fabbricazione;
      $this->categoria = $categoria;
      $this->status = $status;
    }

    // Tipologia
    public function setTipologia($tipologia) {
      $this->tipologia = $tipologia;
    }


    public function getTipologia() {
      return $this->tipologia;
    }

    // Cognome
    public function setCognome($cognome) {
      $this->cognome = $cognome;
    }


    public function getCognome() {
      return $this->cognome;
    }

    // Fabbricazione
    public function setFabbricazione($fabbricazione) {
      $this->fabbricazione = $fabbricazione;
    }


    public function getFabbricazione() {
      return $this->fabbricazione;
    }

    // Categoria
    public function setCategoria($categoria) {
      $this->categoria = $categoria;
    }


    public function getCategoria() {
      return $this->categoria;
    }

    // Status
    public function setStatus($status) {
      $this->status = $status;
    }


    public function getStatus() {
      return $this->status;
    }

  } // Chiusura Prodotto

  class Felpa extends Prodotto {
    private $marca;
    private $misura;
    private $prezzo;

    public function __construct($tipologia, $fabbricazione, $categoria, $status, $marca, $misura, $prezzo) {
      $this->setTipologia($tipologia);
      $this->setFabbricazione($fabbricazione);
      $this->setCategoria($categoria);
      $this->setStatus($status);
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

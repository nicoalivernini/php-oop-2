<?php

  class Prodotto {
    public $tipologia;
    public $fabbricazione;
    public $categoria;
    public $status;

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

 ?>

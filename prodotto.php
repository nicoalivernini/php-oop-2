<?php

  class Prodotto {
    private $tipologia;
    private $nome;
    private $marca;
    private $misura;
    private $fabbricazione;
    private $prezzo;
    private $categoria;
    private $status;

    // Construct
    public function __construct($tipologia, $nome, $marca, $misura, $fabbricazione, $prezzo, $categoria, $status) {
      $this->tipologia = $tipologia;
      $this->nome = $nome;
      $this->marca = $marca;
      $this->misura = $misura;
      $this->fabbricazione = $fabbricazione;
      $this->prezzo = $prezzo;
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

    // Nome
    public function setNome($nome) {
      $this->nome = $nome;
    }


    public function getNome() {
      return $this->nome;
    }

    // Cognome
    public function setCognome($cognome) {
      $this->cognome = $cognome;
    }


    public function getCognome() {
      return $this->cognome;
    }

    // Marca
    public function setMarca($marca) {
      $this->marca = $marca;
    }


    public function getMarca() {
      return $this->marca;
    }

    // Misura
    public function setMisura($misura) {
      $this->misura = $misura;
    }


    public function getMisura() {
      return $this->misura;
    }

    // Fabbricazione
    public function setFabbricazione($fabbricazione) {
      $this->fabbricazione = $fabbricazione;
    }


    public function getFabbricazione() {
      return $this->fabbricazione;
    }

    // Prezzo
    public function setPrezzo($prezzo) {
      $this->prezzo = $prezzo;
    }


    public function getPrezzo() {
      return $this->prezzo;
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

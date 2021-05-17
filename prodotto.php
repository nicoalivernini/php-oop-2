<?php

  class Prodotto {
    private $tipologia;
    private $nome;
    private $marca;
    private $peso;
    private $fabbricazione;
    private $prezzo;
    private $categoria;

    //Tipologia
    public function setTipologia($tipologia) {
      $this->tipologia = $tipologia;
    }


    public function getTipologia() {
      return $this->tipologia;
    }

    //Nome
    public function setNome($nome) {
      $this->$nome = $nome;
    }


    public function getNome() {
      return $this->$nome;
    }

    //Cognome
    public function setCognome($cognome) {
      $this->$cognome = $cognome;
    }


    public function getCognome() {
      return $this->$cognome;
    }

    //Marca
    public function setMarca($marca) {
      $this->$marca = $marca;
    }


    public function getMarca() {
      return $this->$marca;
    }

    //Peso
    public function setPeso($peso) {
      $this->$peso = $peso;
    }


    public function getPeso() {
      return $this->$peso;
    }

    //Fabbricazione
    public function setFabbricazione($fabbricazione) {
      $this->$fabbricazione = $fabbricazione;
    }


    public function getFabbricazione() {
      return $this->$fabbricazione;
    }

    //Prezzo
    public function setPrezzo($prezzo) {
      $this->$prezzo = $prezzo;
    }


    public function getPrezzo() {
      return $this->$prezzo;
    }

    //Categoria
    public function setCategoria($categoria) {
      $this->$categoria = $categoria;
    }


    public function getCategoria() {
      return $this->$categoria;
    }

  } //Chiusura Prodotto

 ?>

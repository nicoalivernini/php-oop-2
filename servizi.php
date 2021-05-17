<?php

  class Servizi {
    private $tipologia;
    private $nome;
    private $durata;
    private $costo;
    private $autore;

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

    //Durata
    public function setDurata($durata) {
      $this->durata = $durata;
    }

    public function getDurata() {
      return $this->durata;
    }

    //Costo
    public function setCosto($costo) {
      $this->costo = $costo;
    }

    public function getCosto() {
      return $this->costo;
    }

    // Autore
    public function setAutore($autore) {
      $this->autore = $autore;
    }

    public function getAutore() {
      return $this->autore;
    }

  } //Chiusura Servizi
 ?>

<?php

  class Servizio {
    private $tipologia;
    private $nome;
    private $durata;
    private $costo;
    private $autore;
    private $status;

    // Construct
    public function __construct($tipologia, $nome, $durata, $costo, $autore, $status) {
      $this->tipologia = $tipologia;
      $this->nome = $nome;
      $this->durata = $durata;
      $this->costo = $costo;
      $this->autore = $autore;
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

    // Durata
    public function setDurata($durata) {
      $this->durata = $durata;
    }

    public function getDurata() {
      return $this->durata;
    }

    // Costo
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

    // Status
    public function setStatus($status) {
      $this->status = $status;
    }

    public function getStatus() {
      return $this->status;
    }

  } // Chiusura Servizi
 ?>

<?php

  class Utente {
    private $nome;
    private $cognome;
    private $sesso;
    private $data_di_nascita;


    //Nome
    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getNome() {
      return $this->nome;
    }

    //Cognome
    public function setCognome($cognome) {
      $this->cognome = $cognome;
    }

    public function getCognome() {
      return $this->cognome;
    }

    //Sesso
    public function setSesso($sesso) {
      $this->sesso = $sesso;
    }

    public function getSesso() {
      return $this->sesso;
    }

    //Data di nascita
    public function setDataDiNascita($data_di_nascita) {
      $this->data_di_nascita = $data_di_nascita;
    }

    public function getDataDiNascita() {
      return $this->data_di_nascita;
    }

  } //Chiusura Utente

 ?>

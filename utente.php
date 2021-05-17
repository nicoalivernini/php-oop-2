<?php

  class Utente {
    private $nome;
    private $cognome;
    private $sesso;
    private $data_di_nascita;
    private $metodo_di_pagamento


    // Construct
    public function __construct($nome, $cognome, $sesso, $data_di_nascita, $metodo_di_pagamento) {
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->sesso = $sesso;
      $this->data_di_nascita = $data_di_nascita;
      $this->metodo_di_pagamento = $metodo_di_pagamento;
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

    // Sesso
    public function setSesso($sesso) {
      $this->sesso = $sesso;
    }

    public function getSesso() {
      return $this->sesso;
    }

    // Data di nascita
    public function setDataDiNascita($data_di_nascita) {
      $this->data_di_nascita = $data_di_nascita;
    }

    public function getDataDiNascita() {
      return $this->data_di_nascita;
    }

    // Metodo di pagamento
    public function setMetodoDiPagamento($metodo_di_pagamento) {
      $this->metodo_di_pagamento = $metodo_di_pagamento;
    }

    public function getMetodoDiPagamento() {
      return $this->metodo_di_pagamento;
    }

  } // Chiusura Utente

 ?>

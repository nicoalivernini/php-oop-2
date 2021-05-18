<?php

  class CartaDiCredito {
    private $numero_carta;
    private $intestatario;
    private $scadenza_carta;
    private $circuito;
    private $cvv;

    // Construct
    public function __construct($numero_carta, $intestatario, $scadenza_carta, $circuito, $cvv) {
      $this->numero_carta = $numero_carta;
      $this->intestatario = $intestatario;
      $this->scadenza_carta = $scadenza_carta;
      $this->circuito = $circuito;
      $this->cvv = $cvv;
    }

    // Numero carta
    public function setNumeroCarta($numero_carta) {
      $this->numero_carta = $numero_carta;
    }

    public function getNumeroCarta() {
      return $this->numero_carta;
    }

    // Intestatario
    public function setIntestatario($intestatario) {
      $this->intestatario = $intestatario;
    }

    public function getIntestatario() {
      return $this->intestatario;
    }

    // Scadenza carta
    public function setScadenzaCarta($scadenza_carta) {
      $this->scadenza_carta = $scadenza_carta;
    }

    public function getScadenzaCarta() {
      return $this->scadenza_carta;
    }

    // Circuito
    public function setCircuito($circuito) {
      $this->circuito = $circuito;
    }

    public function getCircuito() {
      return $this->circuito;
    }

    // CVV
    public function setCvv($cvv) {
      $this->cvv = $cvv;
    }

    public function getCvv() {
      return $this->cvv;
    }


  } // Chiusura Carta di credito
 ?>

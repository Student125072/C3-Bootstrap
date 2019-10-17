<?php

  error_reporting(0);

  $naam = $_POST['naam'];
  $adres = $_POST['adres'];
  $postcode = $_POST['postcode'];

  $class = "not-visible";
  $alert = "alert-danger";
  $msg;

  if (isset($_POST['jaSubmit'])) {

    if (empty($naam) || empty($adres) || empty($postcode)) {
      $class = "is-visible";
      $msg = "Alle velden dienen te worden ingevuld";
    } else {
      $alert = "alert-info";
      $class = "is-visible";
      $msg = "U bent aangemeld voor de nieuwsbrief.";
    }

  }


 ?>

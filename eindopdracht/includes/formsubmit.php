<?php

  error_reporting(0);

  $naaminput = $_POST['naamInput'];
  $adresinput = $_POST['adresInput'];
  $postcodeinput = $_POST['postcodeInput'];

  $class = "not-visible";
  $alert = "alert-danger";
  $msg;

  if (isset($_POST['submit'])) {

    if (isset($naaminput)) {
      $class = "is-visible";
    }

  }


 ?>

<?php
    $diaNacim = $_POST["diaNacim"];
    $mesNacim = $_POST["mesNacim"];
    $horoscopo;
    
    switch($mesNacim) {
      case 1:
        if ($diaNacim < 21) {
          $horoscopo = "capricornio";
        } else {
          $horoscopo = "acuario";
        }
        break;
      case 2:
        if ($diaNacim < 20) {
          $horoscopo = "acuario";
        } else {
          $horoscopo = "piscis";
        }
        break;
      case 3:
        if ($diaNacim < 21) {
          $horoscopo = "piscis";
        } else {
          $horoscopo = "aries";
        }
        break;
      case 4:
        if ($diaNacim < 21) {
          $horoscopo = "aries";
        } else {
          $horoscopo = "tauro";
        }
        break;
      case 5:
        if ($diaNacim < 20) {
          $horoscopo = "tauro";
        } else {
          $horoscopo = "géminis";
        }
        break;
      case 6:
        if ($diaNacim < 22) {
          $horoscopo = "géminis";
        } else {
          $horoscopo = "cáncer";
        }
        break;
      case 7:
        if ($diaNacim < 22) {
          $horoscopo = "cáncer";
        } else {
          $horoscopo = "Leo";
        }
        break;
      case 8:
        if ($diaNacim < 24) {
          $horoscopo = "leo";
        } else {
          $horoscopo = "virgo";
        }
        break;
      case 9:
        if ($diaNacim < 23) {
          $horoscopo = "virgo";
        } else {
          $horoscopo = "libra";
        }
        break;
      case 10:
        if ($diaNacim < 23) {
          $horoscopo = "libra";
        } else {
          $horoscopo = "escorpio";
        }
        break;
      case 11:
        if ($diaNacim < 23) {
          $horoscopo = "escorpio";
        } else {
          $horoscopo = "sagitario";
        }
        break;
      case 12:
        if ($diaNacim < 21) {
          $horoscopo = "sagitario";
        } else {
          $horoscopo = "capricornio";
        }
        break;
      default:
    }

    echo "Su horóscopo es ", $horoscopo;
?>

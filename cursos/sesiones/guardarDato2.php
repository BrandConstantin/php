<?php

session_start();

//muestra el nombre del usuario
//la cookie guardada en guardarDatos.php
echo "El nombre del usuario es: ".$_SESSION['nombre'];
<?php
$host_name="localhost";
$user_name="root";
$password="";
$database="contacto_usuario";

$conexion= mysqli_connect($host_name, $user_name, $password, $database);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
  $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
  $celular = mysqli_real_escape_string($conexion, $_POST['celular']);
  $email = mysqli_real_escape_string($conexion, $_POST['email']);
  $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
  $numdomicilio = mysqli_real_escape_string($conexion, $_POST['numdomicilio']);
  $pais = mysqli_real_escape_string($conexion, $_POST['pais']);
  $ciudad = mysqli_real_escape_string($conexion, $_POST['ciudad']);
  $zip = mysqli_real_escape_string($conexion, $_POST['zip']);

  $sql = "INSERT INTO persona (nombre, apellido, celular, email, direccion, numdomicilio, pais, ciudad, zip) VALUES ('$nombre','$apellido','$celular','$email','$direccion','$numdomicilio','$pais','$ciudad','$zip')";

  if (mysqli_query($conexion, $sql)) {
    echo "Data inserted successfully";
  } else {
    echo "Error inserting data: " . mysqli_error($conexion);
  }
  /*if(isset($_POST['submit'])){
    // Código para procesar los datos del formulario aquí
    // Redirigir al usuario a otra página después de procesar los datos
    header("Location: inscripciones-esp.html");
    exit;
  }*/
  $returnUrl = isset($_POST['returnUrl']) ? $_POST['returnUrl'] : 'index-esp.html';
  sleep(10);
  header("Location: $returnUrl");
  

  mysqli_close($conexion);






?>
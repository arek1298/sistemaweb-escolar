<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Cuenta</title>
  <link rel="icon" type="image/png" href="alumnos/logoutc.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="jquery-3.2.1.min.js"></script>
  <script src="alertifyjs/alertify.js"></script>
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">

</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
        <img src="images/user.png" class="md:mt-px xl:mt-2 width-geolocalizacion-logo" width="100" height="100" /></a><br>
      <a class="navbar-brand" href="#">David Belmares</a>

     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="/index.php">ALUMNOS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profesores/index.php">PROFESORES<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="materias/index.php">MATERIAS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">REPORTES<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cerrar-sesion.php">SALIR<span class="sr-only">(current)</span></a>
      </li>
      </ul>
    </nav>
    <br>


<div class="card-deck">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <img src="images/al.png" alt="" width="150" height="100">
      <p class="card-text">ALUMNOS</p>
      <a class="btn btn-warning btn-lg" href="../crud_pdo/index.php" role="button">IR</a>
    </div>
  </div>
  <div class="card bg-warning">
    <div class="card-body text-center">
      <img src="images/pr.png" alt="" width="150" height="100">
      <p class="card-text">PROFESORES</p>
       <a class="btn btn-danger btn-lg" href="maestros/index.php" role="button">IR</a>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body text-center">
      <img src="images/libros.png" alt="" width="150" height="100">
      <p class="card-text">MATERIAS</p>
       <a class="btn btn-primary btn-lg" href="materias/index.php" role="button">IR</a>
    </div>
  </div>
  <div class="card bg-danger">
    <div class="card-body text-center">
      <img src="images/re.png" alt="" width="150" height="100">
      <p class="card-text">REPORTES</p>
       <a class="btn btn-success btn-lg" href="#" role="button">IR</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/comunicacion.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">MODULO 1</h5>
    <p class="card-text">Materia-Profesor.</p>
    <a href="#" class="btn btn-primary">Ir</a>
  </div>
</div>
</div>
</body>
</html>
    
</body>
</html>
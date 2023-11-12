<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP CRUD usando PDO y Bootstrap/Modal</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
        
      <a class="navbar-brand" href="U2_SH2/bienvenida.php">David Belmares</a>

     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="crud_pdo/index.php">ALUMNOS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="maestros/index.php">PROFESORES<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="materias/index.php">MATERIAS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">REPORTES<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Mat-Pro/index.php">MATERIA-PROFESOR<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Alu-Mat/index.php">ALUMNOS-MATERIAS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cerrar-sesion.php">CERRAR SESION<span class="sr-only">(current)</span></a>
      </li>
      </ul>
    </nav>
    </nav>
    <br>
    <a class="btn btn-primary" href="../Modulo1/doc/index.php" role="button">Descargar PDF</a>
	  	</div>
	</nav>
	<h1 class="page-header text-center">Alumnos-PROFESORES UTC</h1>
	<div class="row">
		<div class="col-sm-12">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					 <th>Lista de alumnos</th>
          <th>Materias</th>
          <th>Profesores</th>
          
          <th>Acción</th>
        </thead>
        <tbody>
          <?php
            // incluye la conexión
            include_once('connection.php');

            $database = new Connection();
              $db = $database->open();
            try{  
                $sql = 'SELECT * FROM alumat';
                foreach ($db->query($sql) as $row) {
                  ?>
                  <tr>
                    <td><?php echo $row['alumnos']; ?></td>
                    <td><?php echo $row['materias']; ?></td>
                    <td><?php echo $row['maestros']; ?></td>
                    
                    <td>
						    			<a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
						    			<a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>
						    		</td>
						    		<?php include('edit_delete_modal.php'); ?>
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						//cerrar conexión
						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('add_modal.php'); ?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/custom.js"></script>
</body>
</html>

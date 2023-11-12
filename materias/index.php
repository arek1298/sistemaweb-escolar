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
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  		<a class="navbar-brand" href="code.html" target="_blank">CONTROL ESCOLAR</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

	  	<div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">
		      	<li class="nav-item">
		        <a class="nav-link" href="../crud_pdo/index.php" target="_blank">ALUMNOS</a>
		      	</li>
		      	<li class="nav-item dropdown">
	              <a class="nav-link " href="../maestros/index.php" id="download" aria-expanded="false">PROFESORES <span class="caret"></span></a>
	              <div class="dropdown-menu" aria-labelledby="download">
	                <a class="dropdown-item" href="../maestros/index.php></a>
	                
	              </div>
	            </li>
		      	<li class="nav-item">
		        <a class="nav-link" href="" target="_blank"><i class="fa fa-facebook-official"></i> Like</a>
		      	</li>
		      	<li class="nav-item">
		        <a class="nav-link text-warning" href="" target="_blank"><i class="fa fa-code"></i> REPORTES</a>
		        <li class="nav-item">
		        <a class="nav-link text-warning" href="../bienvenida.php" target="_blank"><i class="fa fa-code"></i> Regresar</a>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" placeholder="Search" type="text">
		      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		    </form>
	  	</div>
	</nav>
	<h1 class="page-header text-center">MATERIAS</h1>
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
					<th>ID MATERIA</th>
					<th>Nombre</th>
					
					<th>Acción</th>
				</thead>
				<tbody>
					<?php
						// incluye la conexión
						include_once('connection.php');

						$database = new Connection();
    					$db = $database->open();
						try{	
						    $sql = 'SELECT * FROM materia';
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['id']; ?></td>
						    		<td><?php echo $row['nombre']; ?></td>
						    		
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

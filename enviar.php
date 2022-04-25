<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
	<?php
	$conexion = mysqli_connect("localhost", "root", "18181035", "umbtv");
	
	$usu=$_POST['nombre'];
	$correo=$_POST['correo'];
	$desc=$_POST['descripcion'];
	
	
		$query = "INSERT INTO correos VALUES ('','$usu','$correo','$desc')";
		$res=mysqli_query($conexion,$query);

		if ($res){
			?>
            <div class="container">
            <center>
            	<h1>Datos registrados</h1>
                <br>
   				<a href="Index.html"><button type="button" class="btn btn-outline-info">Regresar</button></a> 
            </center>
            </div>
           
            <?php
			
		}else{
				?>
            <div class="container">
            <center>
            	<h1>Error al registrar los datos</h1>
                 <br>
                <a href="Index.html"><button type="button" class="btn btn-outline-info">Regresar</button></a> 
                
            </center>
            </div>
           
            <?php
		}
			

?> 
</body>
</html>
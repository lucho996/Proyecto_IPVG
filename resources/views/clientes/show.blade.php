<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<style>
		body {
			width: 450px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="#">Todos</a></li>
        			<li><a href="#">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Información del usuario</h4>
  		</div>

  		<div class="panel-body">
				
				
				<p>
					RUT: <strong>{{$clientes ->RUT_CLIENTE}}</strong>
				</p>
				<p>
					NOMBRE: <strong>{{$clientes ->NOMBRE_COMPLETO}}</strong>
				</p>
				<p>
					DIRECCION: <strong>{{$clientes ->DIRECCION}}</strong>
				</p>
				<p>
					CIUDAD: <strong>{{$clientes ->CIUDAD}}</strong>
				</p>
				<p>
					COMUNA: <strong>{{$clientes ->COMUNA}}</strong>
				</p>
				<p>
					GIRO: <strong>{{$clientes ->GIRO}}</strong>
				</p>


  			
        <a href="/clientes" class="btn btn-default">Regresar</a>
		</div>
	</div>
</body>
</html>
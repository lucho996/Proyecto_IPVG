<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal</title>
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
    		<div id="bs-example-navbar-collapse-1">
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
			  Nombre: <strong>{{$personal -> 'NOMBREP'}}</strong>
  			</p>
  			<p>
  				Apellido: <strong>asd</strong>
  			</p>

        <a href="/personal" class="btn btn-default">Regresar</a>
		</div>
	</div>
</body>
</html>
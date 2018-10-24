<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<style>
		body {
			width: 1000px;
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
        			<li><a href="/inventario">Todos</a></li>
        			<li class="active"><a href="/inventario/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Nuevo Producto</h4>
  		</div>

  		<div class="panel-body">
  			<form  action="{{ action('InventarioController@store')}}" method="post">
					{{ csrf_field() }}
                <p>
                    <input type="text" name="nombre" placeholder="Nombre" maxlength="50" class="form-control" onkeypress='return validar(event)' required>
                </p>
			    <p>
					<input type="text" name="marca" placeholder="Marca" maxlength="50" class="form-control" onkeypress='return validar(event)' required>
                </p>	
				<p>
					<select name="ubicacion" class="form-control" >
						<option>Taller Abastible</option>
						<option>Taller Petroquim</option>
						<option>Taller</option>          
					</select>
				</p>

                <p>
                    <input type="text" name="valor" placeholder="Valor" maxlength="9" class="form-control" onkeypress='return validaNumericos(event)' required>
                </p>

                <p>
                    <select name="estado" class="form-control" >
                                <option>Defectuoso</option>
								<option>En uso</option>
								<option>Disponible</option>        
                    </select>
                </p>
                <p>
					<input type="submit" value="Guardar" class="btn btn-success">
				</p>
			</form>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
	@endif
</body>
<script type="text/javascript" src="{{ URL::asset('js/solo_num.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/solo_letras.js') }}"></script>
</html>
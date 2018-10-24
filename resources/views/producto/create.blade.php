<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Producto</title>
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
        			<li><a href="/producto">Todos</a></li>
        			<li class="active"><a href="/producto/create">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Nuevo Producto</h4>
  		</div>

  		<div class="panel-body">
  			<form  action="store" method="post">
				  
				<p>
					<input type="text" name="descripcion" placeholder="Descripción" class="form-control" maxlength="50"  required>
                </p>
                <p>
                    <input type="text" name="codigo_pet_oferta" placeholder="Cod. Petición" maxlength="11" class="form-control" onkeypress='return validarNumericos(event)' required>
                </p>
				<p>
					<input type="file" name="plano" id="plano">
				</p>
                <p>
                    <input type="text" name="correo" placeholder="Correo" class="form-control">
                </p>
                <p>
                    <input type="text" name="hh" placeholder="Hora Hombre" class="form-control" onkeypress='return validaNumericos(event)' required>
                </p>
                <p>
                    <input type="date" name="fecha_nac" class="form-control" required>
                </p>
                <p>
                    <input type="text" name="direccion" placeholder="Dirección" class="form-control" required>
				</p>
				<p>
						<select name="tipo" class="form-control" >

                                <option>Emergencia</option>
                                
                                <option>Normal</option>
                            
                                
					</select>					
				</p>
                <p>
                    <select name="tipo" class="form-control" >

                                <option>Taller</option>
                                
                                <option>Abastible</option>
                                
                                <option>Petroquim</option>
                                
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
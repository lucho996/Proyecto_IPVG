<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <title>Clientes</title>
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
                    <div class="navbar-header">
                    </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="/clientes">Todos</a></li>
                          <li><a href="/clientes/create">Nuevo</a></li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Lista de Clientes</h4>
                </div>
      
                <div class="panel-body">
                  <table class="table ">
                      <thead>
                          <tr>
                              <th>Rut</th>
                              <th>Nombre</th>
                              <th>Tipo</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($clientes as $clientes)
                              <tr>
                                  <td>{{ $clientes->RUT_CLIENTE }}</td>
                                  <td>{{ $clientes->NOMBRE_COMPLETO }}</td>
                                  <td>{{ $clientes->TIPO }}</td>
                                  <td>
                                      <a href="/clientes/show/{{ $clientes->RUTP }}"><span class="label label-info">Ver</span></a>
                                      <a href="/clientes/edit/{{ $clientes->RUTP }}"><span class="label label-success">Editar</span></a>
                                      <a href="{{ url('/clientes/destroy',$clientes->RUTP) }}"><span class="label label-danger">Eliminar</span></a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
          @if(Session::has('message'))
            <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
    
</body>
</html>
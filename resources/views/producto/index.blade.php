<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <title>Personal</title>
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
                          <li class="active"><a href="/personal">Todos</a></li>
                          <li><a href="/personal/create">Nuevo</a></li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Lista de Personal</h4>
                </div>
      
                <div class="panel-body">
                  <table class="table ">
                      <thead>
                          <tr>
                              <th>Rut</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($personal as $personal)
                              <tr>
                                  <td>{{ $personal->RUTP }}</td>
                                  <td>{{ $personal->NOMBREP }}</td>
                                  <td>{{ $personal->APELLIDOP }}</td>
                                  <td>
                                      <a href="/personal/show/{{ $personal->RUTP }}"><span class="label label-info">Ver</span></a>
                                      <a href="/personal/edit/{{ $personal->RUTP }}"><span class="label label-success">Editar</span></a>
                                      <a href="{{ url('/personal/destroy',$personal->RUTP) }}"><span class="label label-danger">Eliminar</span></a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <title>Modificar Cliente</title>
</head>
<body>
        <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Modificar HERRAMIENTA</h4>
                </div>
               
                <div class="panel-body">
                <form action="{{ route('inventario.update', $inventario->ID_INVENTARIO)}}" method="POST">
               
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="PUT">
                      <p>   
                          <input type="text" name="codigo" value="{{ $inventario->ID_INVENTARIO }}" placeholder="Rut" class="form-control" onkeypress='return validaNumericos(event)' maxlength="9" minlength="9" required>
                      </p>
                      <p>   
                            <input type="text" name="nombre" value="{{ $inventario->NOMBRE }}" placeholder="Rut" class="form-control" onkeypress='return validaNumericos(event)' maxlength="9" minlength="9" required>
                        </p>
                      <p>
                          <input type="text" name="marca" value="{{ $inventario->MARCA }}" placeholder="Nombre" maxlength="50" class="form-control" onkeypress='return validar(event)' required>
                      </p>
                      <p>
                            <select name="ubicacion" class="form-control" >
                                <option>Taller Abastible</option>
                                <option>Taller Petroquim</option>
                                <option>Taller</option>          
                            </select>
                        </p>
        
                        <p>
                            <input type="text" name="valor" value="{{ $inventario->VALOR }}" placeholder="Valor" maxlength="9" class="form-control" onkeypress='return validaNumericos(event)' required>
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
                      
               
              </div>
          </div>

          @if(Session::has('message'))
          <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
      @endif
  </form>
</body>
</html>
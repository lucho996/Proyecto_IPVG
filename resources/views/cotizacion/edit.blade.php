<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal</title>
</head>
<div style="width: 1100px;
margin: 0px auto;
background: #cccccc;
padding: 35px;">
</div>
</head>
<body >
        <div style="width: 1100px; margin:20px auto;">
            <div style="width: 200px; float:left;  position:relative;">
            @include('intranet.menu')
            </div>    
        <div style="width: 850px; float: right; position:relative;">
        <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Modificar Cotizaciòn</h4>
                </div>
               
                <div class="panel-body">
                <form action="{{ route('cotizacion.update', $cotizacion->ID_COTIZACION)}}" method="POST" enctype="multipart/form-data">
               
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="PUT">
                          <p>
                                <select name="cliente" class="form-control" >
                                        @foreach($clientes as $cliente)
                                            <option value="{{$cliente->RUT_CLIENTE}}">{{$cliente->NOMBRE_COMPLETO}}</option>
                                        @endforeach
                        
                                </select>				
                            </p>
                            <p>
                            <input type="text" name="codigo_pet_oferta" value="{{$cotizacion->COD_PETICION_OFERTA}}" placeholder="Cod. Petición" maxlength="11" class="form-control" onkeypress='return validarNumericos(event)' required>
                            </p>
                            <p>
                                <input type="text" name="fecha_resp_coti" value="{{$cotizacion->FECHA_RESPUESTA_COTIZACION}}"placeholder="Fecha respuesta de cotización" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" id="fecha_llegada" class="form-control" required>
            
                            </p>
                            <p>
                                <input type="text" name="descripcion_cot" value="{{$cotizacion->DESCRIPCION}}"class="form-control" placeholder="Descripcion" onkeypress='return validar(event)' required >
                            </p>
                            <P>
                                    <select name="estado" class="form-control" >
                                                <option>Aceptada</option>
                                                <option>Rechazada</option>
                                                <option>En Espera</option>
                            
                            
                                    </select>	
                            </P>
                            <p>
                                <input type="submit" value="Guardar" class="btn btn-success">
                          <a href="/cotizacion" class="btn btn-default">Regresar</a>
                      </p>
                      
               
              </div>
          </div>

          @if(Session::has('message'))
          <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
      @endif
  </form>
</div>
</div>
</body>
</html>
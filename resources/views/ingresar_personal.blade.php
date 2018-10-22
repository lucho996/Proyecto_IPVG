

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/cuadrado.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-reboot.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registro del personal</title>
</head>
<body>
<div  style="width:100%; max-width:1080px; margin:auto; background:#F3F2F2;">  
        @include('menu')     
<section>
    
    <br>
    <div class="cuadrado2">
        <h4>Registro de Personal</h4>
    </div>
    <div class="cuadrado">
    <table style="margin-left: auto; margin-right:auto;" class="table">
        <tr>
            <td>RUT:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
       
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>        
        <tr>
            <td>Telefono:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Dirección:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Correo:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Fecha de Nacimiento:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Cargo:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td>Tipo:</td>
            <td><select name="" id="" class="form-control">
                    <option>Taller Planta</option>
                    <option>Taller Externo</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Hora Hombre:</td>
            <td><input type="text" name="" class="form-control" id=""></td>
        </tr>
        <tr>
            <td><center><input type="button" value="Guardar" id="" class="btn" style="background: #024959; border-color:#024959; color:#fff;"></center>   </td>
            <td><center><input type="button" value="Limpiar" id="" class="btn" style="background: #024959; border-color:#024959; color:#fff;"></center>   </td>
        </tr>
        <br> 
        </table>   
    </div>
    <br>
    <br>
</section>
</div> 

<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
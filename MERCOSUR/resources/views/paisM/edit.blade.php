<!DOCTYPE html>
<html lang="en">
    <head>
        <title> RELACION COMERCIAL </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
    window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    })
    </script>
    </head>

    <header>
    <a href="http://localhost:8000/index.php" class="logo">
        <img src="img/logo/30logo.png" alt="" width="140" height="94" class="d-inline-block align-text-center">
        MERCOSUR
    </a>
    <ul>
        <li><a href="http://localhost:8000/index.php">Menu</a></li>
        <li><a href="http://localhost:8000/comercial">R. Comerciales</a></li>
        <li><a href="http://localhost:8000/diplomatica">R. Diplomaticas</a></li>
        <li><a href="http://localhost:8000/paisE">P. Extranjeros</a></li>
        <li><a href="http://localhost:8000/paisM">P. Miembros</a></li>
    </ul>
</header>

    <table class="container-row">
    
<form action="{{route('paisM.update', $miem->idpais_miembro)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="calzado">Calzado</label>
        <input type="text" class="form-control" name="calzado" required value="{{$miem->nombre}}">
    </div>
    <div class="text-right">
    <button type="submit" class="btn btn-primary mr-5">Guardar datos</button>
    <button type="reset" class="btn btn-danger mr-5" value="cancelar">Cancelar</button>
    <a href="javascript:history.back()" class="btn btn-default btn-sm">Listado</a>
    </div>
</table>
<br>
    </body>
</html>
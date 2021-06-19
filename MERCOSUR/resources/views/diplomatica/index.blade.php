<!DOCTYPE html>
<html lang="en">
    <head>
        <title> RELACION DIPLOMATICA </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header>
    <a href="#" class="logo">
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
<section class="banner"></section>
<script type="text/javascript">
    window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    })
    </script>
            <div class="container mt-5" style="padding-top:50px">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                            <form action="{{route('diplomatica.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <label for="iddiplo"></label>
                                    <input type="text" class="form-control mb-3" name="iddiplo" placeholder="Id" required="required">
                            </div>
                            <div class="form-group">
                            <label for="titulo"></label>
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo" required="required">
                            </div>
                            <div class="form-group">
                            <label for="fecha"></label>
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" required="required"> 
                            </div>
                            <div class="form-group">
                            <label for="detalle"></label>
                                    <input type="text" class="form-control mb-3" name="detalle" placeholder="Detalle" required="required">
                            </div>        
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            
                        </div>

                        <div class="col-md-8">
                        <table class="table text-center" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Iddiplo</th>
                                        <th>Titulo</th>
                                        <th>Fecha</th>
                                        <th>Detalle</th>
                                        <th colspan="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($diplomaticas as $diplomatica)
                                    <tr>
                                        <td class="text-center">{{ $diplomatica->iddiplo}}</td>
                                        <td class="text-center">{{ $diplomatica->titulo}}</td>
                                        <td class="text-center">{{ $diplomatica->fecha}}</td>
                                        <td class="text-center">{{ $diplomatica->detalle}}</td>
                                        <th><form action="" method="post" >
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit" >Borrar</button>
                                        </form>
                                        </th>
                                        <th>
                                        <a href=""class="btn btn-warning ">Editar</a>
                                        </th>
                                    </tr>
                                @endforeach
                                <tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
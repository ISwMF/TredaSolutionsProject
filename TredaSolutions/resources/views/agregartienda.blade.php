<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/ajax.js')}}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/left-panel.css')}}">
    <title>Agregar tienda</title>
</head>

<body>
    <div class="container" style="background-image: url('https://www.redeszone.net/app/uploads-redeszone.net/2019/11/internet-extranet-intranet.jpg');">
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn5.dibujos.net/dibujos/pintados/202024/tienda-con-toldo-edificios-otros-edificios-11826688.jpg" alt="" width="100%" height="100%">
                    <div class="card-body">
                        <h5 class="card-title">Agregar tienda</h5>
                        <p class="card-text">Aquí podrás agregar tu tienda, posteriormente puedes agregar productos a esta.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="../home" class="btn btn-info btn-block">Ver productos en tienda</a>
                        </li>
                        <li class="list-group-item">
                            <a href="../agregar-producto" class="btn btn-info btn-block">Agregar producto</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="../home" class="card-link">Volver</a>
                    </div>
                </div>
            </div>
            <li></li>
            <div class="col-8">
                <div class="card" id="presentacion">
                    <div id="formulario-producto">
                        <li class="list-group-item">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Coloca aquí el nombre de tu producto">
                                <small id="emailHelp" class="form-text text-muted">Solo debes ingresar el nombre de tu tienda para comenzar</small>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-block" onclick="enviarSolicitudTienda(nombre.value)">Submit</button>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</body>

</html>

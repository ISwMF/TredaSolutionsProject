<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <title>Document</title>
</head>

<body>
    <div class="container" style="background-image: url('https://www.redeszone.net/app/uploads-redeszone.net/2019/11/internet-extranet-intranet.jpg');">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <img src="https://www.processmaker.com/wp-content/uploads/2019/10/processmaker-partners-treda-solutions.png" width="90%" height="90%">
                        </div>
                        <div class="col-sm-9 text-center">
                            <h5 class="card-header">Prueba práctica de PHP</h5>
                            <br>
                            <h4><b>Tienda actual:</b> {{$tienda['nombre']}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Añadido</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($productos); $i++) <tr>
                        <th scope="row">{{$i + 1}}</th>
                        <td>{{$productos[$i]['SKU']}}</td>
                        <td>{{$productos[$i]['nombre']}}</td>
                        <td>{{$productos[$i]['descripcion']}}</td>
                        <td>{{$productos[$i]['valor']}}</td>
                        <td><img src="{{base64_decode($productos[$i]['imagen'])}}"></td>
                        <td>{{$productos[$i]['created_at']}}</td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
        <br>
        <button class="btn btn-info" onclick="goBack()">Volver</button>
        <br>
        <br>
        
    </div>
    <script src="{{ asset('js/utilidades.js')}}"></script>
</body>

</html>
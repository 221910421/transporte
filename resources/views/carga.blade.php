<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="tabla">
        <div>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th>No</th>

                    <th>Nombre del transportista</th>
                    <th>Vehiculo</th>
                    <th>Fecha y Hora</th>
                    <th>Peso total de la carga</th>
                    <th>Cantidad de paquetes</th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detalleCarga as $detalleCargas)
                    <tr>
                        <td>{{ $detalleCargas->id }}</td>
                        {{-- <td>{{ $$detalleCargas->nombre }}</td> --}}
                        <td>{{ $detalleCargas->tipo }}</td>
                        <td>{{ $detalleCargas->peso }}</td>
                        <td>{{ $detalleCargas->cantidad }}</td>
                        <td>
                            <a href="#"><i class="fa fa-fw fa-eye"></i> Dar de baja al transportista</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>

</html>

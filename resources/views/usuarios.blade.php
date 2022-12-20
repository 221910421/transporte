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

                    <th>Nombre </th>
                    <th>Apellidos</th>
                    <th>Rol</th>
                    <th>Estatus</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transportistas as $transportista)
                    <tr>
                        <td>{{ $transportista->id }}</td>
                        <td>{{ $transportista->nombre }}</td>
                        <td>{{ $transportista->apellidos }}</td>
                        <td>{{ $transportista->rol }}</td>
                        <td>{{ $transportista->estado }}</td>
                        <td>
                            <a href="/baja?id={{$transportista->id}}"><i class="fa fa-fw fa-eye"></i> Dar de baja al transportista</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
</body>
</html>

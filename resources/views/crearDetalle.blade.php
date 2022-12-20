<!DOCTYPE html>
<html>
<head>
    <title>Crear Detalle</title>
</head>

<body>

    <form action="{{route('guardarDetalleCarga')}}" method="post">
        @csrf
        <label>Peso: </label>
        <input type="text" name="peso" placeholder="ej: 138KG" required/>
        <br>
        <label>Cantidad: </label>
        <input type="text" name="cantidad" placeholder="ej: 2" required/>
        <br>
        <label>Origen: </label>
        <input type="text" name="salida" placeholder="ej:Ciudad de México " required/>
        <br>
        <label>Destino: </label>
        <input type="text" name="destino" placeholder="ej: Guadalajara" required/>
        <br>
        <label>Tipo vehiculo: </label>
        <select name="tipo" required>
            <option value=>Seleccione un tipo de vehiculo</option>
            <option value="Camioneta">Camioneta</option>
            <option value="Trailer">Trailer</option>
            <option value="Torton">Torton</option>
        </select>
        <br>
        <input type="submit" value="Crear"/>
    </form>

</body>

</html>

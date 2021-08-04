//VISTA PARA MOSTRAR DATOS DE EMPELADOS
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Correo</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)

        @endforeach
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Foto}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>{{$empleado->Acciones}}</td>
            <td>{{$empleado->}}</td>
        </tr>
    </tbody>
</table>

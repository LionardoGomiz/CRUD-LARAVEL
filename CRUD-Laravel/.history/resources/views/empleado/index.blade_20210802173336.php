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
            <td>{{$emeplado->id}}</td>
            <td>{{$emeplado->Foto}}</td>
            <td>{{$emeplado->Nombre}}</td>
            <td>{{$emeplado->ApellidoPaterno}}</td>
            <td>{{$emeplado->Correo}}</td>
            <td>{{$emeplado->Acciones}}</td>
            <td>{{$emeplado->}}</td>
        </tr>
    </tbody>
</table>

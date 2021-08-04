//VISTA PARA MOSTRAR DATOS DE EMPELADOS
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)

        @endforeach
        <tr>
            <tr>
            <td>{{$empleado->id}}</td>
            </tr>
            <td>{{$empleado->Foto}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>Editar
            <form action="{{ url('/empleado/'.$empleado->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('Desea borrar el dato?')"
                value="Borrar">
            </form>
        </td>

        </tr>
    </tbody>
</table>

//VISTA PARA MOSTRAR DATOS DE EMPELADOS
<a href="{{url('empleado/create')}}"></a>
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
            <td><img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt=""></td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td><a href="{{url('/empleado/'.$empleado->id.'/edit')}}">Editar</a>
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

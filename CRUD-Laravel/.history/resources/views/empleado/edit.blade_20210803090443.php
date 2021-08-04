//VISTA DE FORMULARIO PARA EDITAR LOS DATOS DE LOS EMPELADOS
<form action="{{url('/empleado/'.$empleado->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
</form>
@include('empleado.form');

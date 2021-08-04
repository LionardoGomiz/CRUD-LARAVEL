//VISTA DE FORMULARIO PARA EDITAR LOS DATOS DE LOS EMPELADOS
<form action="{{url('/empleado/'.$emplado->id)}}" method="POST" enctype="multipart/form-data">
@csrf
</form>
@include('empleado.form');

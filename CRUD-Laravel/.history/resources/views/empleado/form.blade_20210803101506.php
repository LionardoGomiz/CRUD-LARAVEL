//VISTA DE FORMULARIO PARA CREAR Y EDITAR LOS DATOS DE LOS EMPELADOS
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre">
<br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}" id="ApellidoPaterno">
<br>
    <label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}" id="ApellidoMaterno">
<br>
    <label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{($empleado->Correo)?$empleado->Correo:''}}"  id="Correo">
<br>
    <label for="Foto">Foto</label>
    <td><img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt=""></td>
<input type="file" name="Foto" value=""  id="Foto">
<br>
    <label for=""></label>
<input type="submit"  value="Guardar datos">
<br>

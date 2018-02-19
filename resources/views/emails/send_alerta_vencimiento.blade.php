

Estimado Usuario {{ $user->name }},<br><br>



los siguientes contratos proximos a vencer:<br><br>

<table >
	<th>
		<td>id</td> <td>fecha</td> <td>idcontrato</td>
		<td>nit</td> <td>tercero</td> <td>contacto</td> 
		<td>direccion</td> <td>telefono</td> <td>descripcion</td> 
		<td>tipocontrato</td> <td>objetocontrato</td> 
		<td>duracion</td> <td>fechafin</td> <td>valor</td> 
		<td>revisado</td> <td>fecharev</td> <td>juridico</td> 
		<td>fechajur</td> <td>aprobado</td> <td>fechaapr</td> 
		<td>fechaadi</td> <td>detalleadicion</td> <td>estado</td>
	</th>
	<tbody>
		@foreach(  $contratos  as $contrato )
		<tr>
			<td>{{ $contrato->id }}  </td>
			<td>{{ $contrato->fecha }}</td>
			<td>{{ $contrato->idcontrato }}	</td>
			<td>{{ $contrato->ter }} </td>
			<td>{{ $contrato->razonsocial }}	</td>
			<td>{{ $contrato->contacto }}	</td>
			<td>{{ $contrato->direccion }}	</td>
			<td>{{ $contrato->telefono }}	</td>
			<td>{{ $contrato->descripcion }}	</td>
			<td>{{ $contrato->tipocontrato }}	</td>
			<td>{{ $contrato->objetocontrato }}	</td>
			<td>{{ $contrato->duracion }}	</td>
			<td>{{ $contrato->fechafin }}	</td>
			<td>{{ $contrato->valor }}	</td>
			<td>{{ $contrato->revisado }}	</td>
			<td>{{ $contrato->fecharev }}	</td>
			<td>{{ $contrato->juridico }}	</td>
			<td>{{ $contrato->fechajur }}	</td>
			<td>{{ $contrato->aprobado }}	</td>
			<td>{{ $contrato->fechaapr }}	</td>
			<td>{{ $contrato->fechaadi }}	</td>
			<td>{{ $contrato->detalleadicion }}	</td>
			<td>{{ $contrato->estado }}	</td>

		</tr>
		@endforeach
	</tbody>


</table>


Usted puede inicar sesion aqui: <a href="http://192.168.7.6/laravel/contratos/public">lauradaniela/contratos </a>.<br><br>

Esperamos sea grata su experiencia con nuestros productos.



<div class="container">
    <p>
        <strong>Copyright &copy; 2018  -  <a href="https://edgardomartinez.com"><b>eemc78@hotmail.com</b></a>
    </p>
</div>
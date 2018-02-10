@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contratos') }}">Contrato</a> :
@endsection
@section("contentheader_description", $contrato->$view_col)
@section("section", "Contratos")
@section("section_url", url(config('laraadmin.adminRoute') . '/contratos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contratos Edit : ".$contrato->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($contrato, ['route' => [config('laraadmin.adminRoute') . '.contratos.update', $contrato->id ], 'method'=>'PUT', 'id' => 'contrato-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'fecha')
					@la_input($module, 'idcontrato')
					@la_input($module, 'ter')
					@la_input($module, 'contacto')
					@la_input($module, 'direccion')
					@la_input($module, 'telefono')
					@la_input($module, 'descripcion')
					@la_input($module, 'tipocontrato')
					@la_input($module, 'objetocontrato')
					@la_input($module, 'duracion')
					@la_input($module, 'fechafin')
					@la_input($module, 'valor')
					@la_input($module, 'revisado')
					@la_input($module, 'fecharev')
					@la_input($module, 'juridico')
					@la_input($module, 'fechajur')
					@la_input($module, 'aprobado')
					@la_input($module, 'fechaapr')
					@la_input($module, 'fechaadi')
					@la_input($module, 'detalleadicion')
					@la_input($module, 'estado')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contratos') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#contrato-edit-form").validate({
		
	});
});
</script>
@endpush

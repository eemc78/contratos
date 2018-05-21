@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/procesos') }}">Proceso</a> :
@endsection
@section("contentheader_description", $proceso->$view_col)
@section("section", "Procesos")
@section("section_url", url(config('laraadmin.adminRoute') . '/procesos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Procesos Edit : ".$proceso->$view_col)

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
				{!! Form::model($proceso, ['route' => [config('laraadmin.adminRoute') . '.procesos.update', $proceso->id ], 'method'=>'PUT', 'id' => 'proceso-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'numero')
					@la_input($module, 'tipoproceso')
					@la_input($module, 'detalle')
					@la_input($module, 'usuario')
					@la_input($module, 'fecha')
					@la_input($module, 'proveedor')
					@la_input($module, 'estadoverifica')
					@la_input($module, 'ordencompra')
					@la_input($module, 'factura')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/procesos') }}">Cancel</a></button>
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
	$("#proceso-edit-form").validate({
		
	});
});
</script>
@endpush

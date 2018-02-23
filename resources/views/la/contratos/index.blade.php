@extends("la.layouts.app")

@section("contentheader_title", "Contratos")
@section("contentheader_description", "Contratos listing")
@section("section", "Contratos")
@section("sub_section", "Listing")
@section("htmlheader_title", "Contratos Listing")

@section("headerElems")
@la_access("Contratos", "create")
	<button class="btn btn-success btn-sm pull-left" data-toggle="modal" data-target="#AddModal">	Agregar Contrato
		
	</button>
@endla_access
@endsection

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

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Contratos", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Contrato</h4>
			</div>
			{!! Form::open(['action' => 'LA\ContratosController@store', 'id' => 'contrato-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
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
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/contrato_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#contrato-add-form").validate({
		
	});
});
</script>
@endpush

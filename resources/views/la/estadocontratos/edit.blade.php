@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/estadocontratos') }}">EstadoContrato</a> :
@endsection
@section("contentheader_description", $estadocontrato->$view_col)
@section("section", "EstadoContratos")
@section("section_url", url(config('laraadmin.adminRoute') . '/estadocontratos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "EstadoContratos Edit : ".$estadocontrato->$view_col)

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
				{!! Form::model($estadocontrato, ['route' => [config('laraadmin.adminRoute') . '.estadocontratos.update', $estadocontrato->id ], 'method'=>'PUT', 'id' => 'estadocontrato-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'estado')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/estadocontratos') }}">Cancel</a></button>
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
	$("#estadocontrato-edit-form").validate({
		
	});
});
</script>
@endpush

@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tipocontratos') }}">TipoContrato</a> :
@endsection
@section("contentheader_description", $tipocontrato->$view_col)
@section("section", "TipoContratos")
@section("section_url", url(config('laraadmin.adminRoute') . '/tipocontratos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "TipoContratos Edit : ".$tipocontrato->$view_col)

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
				{!! Form::model($tipocontrato, ['route' => [config('laraadmin.adminRoute') . '.tipocontratos.update', $tipocontrato->id ], 'method'=>'PUT', 'id' => 'tipocontrato-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tipocontrato')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tipocontratos') }}">Cancel</a></button>
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
	$("#tipocontrato-edit-form").validate({
		
	});
});
</script>
@endpush

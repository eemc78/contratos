@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/ters') }}">Ter</a> :
@endsection
@section("contentheader_description", $ter->$view_col)
@section("section", "Ters")
@section("section_url", url(config('laraadmin.adminRoute') . '/ters'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Ters Edit : ".$ter->$view_col)

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
				{!! Form::model($ter, ['route' => [config('laraadmin.adminRoute') . '.ters.update', $ter->id ], 'method'=>'PUT', 'id' => 'ter-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'razonsocial')
					@la_input($module, 'direccion')
					@la_input($module, 'telefono')
					@la_input($module, 'representante')
					@la_input($module, 'Nit')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/ters') }}">Cancel</a></button>
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
	$("#ter-edit-form").validate({
		
	});
});
</script>
@endpush

@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/personas') }}">Persona</a> :
@endsection
@section("contentheader_description", $persona->$view_col)
@section("section", "Personas")
@section("section_url", url(config('laraadmin.adminRoute') . '/personas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Personas Edit : ".$persona->$view_col)

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
				{!! Form::model($persona, ['route' => [config('laraadmin.adminRoute') . '.personas.update', $persona->id ], 'method'=>'PUT', 'id' => 'persona-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombre')
					@la_input($module, 'tipodoc')
					@la_input($module, 'Doc')
					@la_input($module, 'sexo')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/personas') }}">Cancel</a></button>
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
	$("#persona-edit-form").validate({
		
	});
});
</script>
@endpush

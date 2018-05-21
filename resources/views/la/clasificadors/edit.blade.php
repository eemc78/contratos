@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/clasificadors') }}">Clasificador</a> :
@endsection
@section("contentheader_description", $clasificador->$view_col)
@section("section", "Clasificadors")
@section("section_url", url(config('laraadmin.adminRoute') . '/clasificadors'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Clasificadors Edit : ".$clasificador->$view_col)

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
				{!! Form::model($clasificador, ['route' => [config('laraadmin.adminRoute') . '.clasificadors.update', $clasificador->id ], 'method'=>'PUT', 'id' => 'clasificador-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'clasificador')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/clasificadors') }}">Cancel</a></button>
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
	$("#clasificador-edit-form").validate({
		
	});
});
</script>
@endpush

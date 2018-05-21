@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tipoprocesos') }}">Tipoproceso</a> :
@endsection
@section("contentheader_description", $tipoproceso->$view_col)
@section("section", "Tipoprocesos")
@section("section_url", url(config('laraadmin.adminRoute') . '/tipoprocesos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tipoprocesos Edit : ".$tipoproceso->$view_col)

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
				{!! Form::model($tipoproceso, ['route' => [config('laraadmin.adminRoute') . '.tipoprocesos.update', $tipoproceso->id ], 'method'=>'PUT', 'id' => 'tipoproceso-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tipoproceso')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tipoprocesos') }}">Cancel</a></button>
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
	$("#tipoproceso-edit-form").validate({
		
	});
});
</script>
@endpush

@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/verificaxprocesos') }}">Verificaxproceso</a> :
@endsection
@section("contentheader_description", $verificaxproceso->$view_col)
@section("section", "Verificaxprocesos")
@section("section_url", url(config('laraadmin.adminRoute') . '/verificaxprocesos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Verificaxprocesos Edit : ".$verificaxproceso->$view_col)

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
				{!! Form::model($verificaxproceso, ['route' => [config('laraadmin.adminRoute') . '.verificaxprocesos.update', $verificaxproceso->id ], 'method'=>'PUT', 'id' => 'verificaxproceso-edit-form']) !!}
					@la_form($module)
					
					{{--
					
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/verificaxprocesos') }}">Cancel</a></button>
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
	$("#verificaxproceso-edit-form").validate({
		
	});
});
</script>
@endpush

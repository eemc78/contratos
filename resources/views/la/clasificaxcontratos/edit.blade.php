@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/clasificaxcontratos') }}">Clasificaxcontrato</a> :
@endsection
@section("contentheader_description", $clasificaxcontrato->$view_col)
@section("section", "Clasificaxcontratos")
@section("section_url", url(config('laraadmin.adminRoute') . '/clasificaxcontratos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Clasificaxcontratos Edit : ".$clasificaxcontrato->$view_col)

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
				{!! Form::model($clasificaxcontrato, ['route' => [config('laraadmin.adminRoute') . '.clasificaxcontratos.update', $clasificaxcontrato->id ], 'method'=>'PUT', 'id' => 'clasificaxcontrato-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'idcontrato')
					@la_input($module, 'idclasificador')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/clasificaxcontratos') }}">Cancel</a></button>
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
	$("#clasificaxcontrato-edit-form").validate({
		
	});
});
</script>
@endpush

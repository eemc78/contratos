@extends('la.layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

 
    <div class="login-box col s12 z-depth-4 card-panel">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>{{ LAConfigs::getByKey('sitename_part1') }} </b>{{ LAConfigs::getByKey('sitename_part2') }}</a>
        </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hay probelmas con sus datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-box-body row">
    <p class="login-box-msg">Ingrese sus datos para iniciar</p>
    <!-- form action="{{ url('/login') }}" method="post" class="login-form" -->
    {!!Form::open(['url'=>'/login','method'=>'POST'])!!}   
        <!-- input type="hidden" name="_token" value="{{ csrf_token() }}" -->
         {{ Form::token() }}
        <div class="form-group has-feedback input-field col s12">
                <div class="form-group">
                    {!!Form::text('email', null,['placeholder'=> 'Email',  'class'=>'form-control mdi-social-person-outline prefix'])!!}
                </div>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback input-field col s12">
            <!-- input type="password" class="form-control" placeholder="Clave" name="password"/ -->
                <div class="form-group">
                    {!!Form::password('password', null,['placeholder'=> 'Clave',  'class'=>'form-control mdi-social-person-outline prefix'])!!}
                </div>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                    <label>
                        <h5>Recuerdame</h5>
                        {{ Form::checkbox('remember', 1, null, ['class' => 'checkbox iCheck']) }}
                    </label>
            </div>
            <!--div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesion</button>
            </div> 
                {!! Form::reset('Limpiar', ['class' => 'btn btn-primary']) !!}
            -->

                {!!Form::submit('Enviar',['class'=>'btn btn-large btn-success btn-primary btn-block btn-flat'])!!}
            
        </div>
    <!--/form -->
    {!!Form::close()!!}

    @include('auth.partials.social_login')

    <a href="{{ url('/password/reset') }}">Olvidé mi clave</a><br>
    <!--<a href="{{ url('/register') }}" class="text-center">Register a new membership</a>-->

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->


    @include('la.layouts.partials.scripts_auth')

      <!-- ================================================
    Scripts
    ================================================ -->


    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

</body>



@endsection

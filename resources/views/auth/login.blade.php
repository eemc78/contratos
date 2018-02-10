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
    <form action="{{ url('/login') }}" method="post" class="login-form" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="email" class="form-control" placeholder="Email" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" class="form-control" placeholder="Clave" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox iCheck">
                    <label>
                        <input type="checkbox" name="remember"> <h5>Recuerdame</h5>
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesion</button>
            </div><!-- /.col -->
        </div>
    </form>

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

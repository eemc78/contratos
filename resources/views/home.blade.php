<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
    <meta name="author" content="Dwij IT Solutions">

    <meta property="og:title" content="{{ LAConfigs::getByKey('sitename') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ LAConfigs::getByKey('site_description') }}" />
    
    <meta property="og:url" content="http://laraadmin.com/" />
    <meta property="og:sitename" content="laraAdmin" />
	<meta property="og:image" content="http://demo.adminlte.acacha.org/img/LaraAdmin-600x600.jpg" />
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@laraadmin" />
    <meta name="twitter:creator" content="@laraadmin" />
    
    <title>{{ LAConfigs::getByKey('sitename') }}</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/la-assets/css/bootstrap.css') }}" rel="stylesheet">

	<link href="{{ asset('la-assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('/la-assets/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/la-assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/la-assets/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->


<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>{{ LAConfigs::getByKey('sitename') }}</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">Inicio</a></li>
                <li><a href="#about" class="smoothScroll">Version</a></li>
                <li><a href="#contact" class="smoothScroll">Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Ingreso</a></li>
                    <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12" style="background: url({{ asset('/la-assets/img/app-bg.png') }}); background-repeat: no-repeat; background-position: center center; background-size: 70%; height: 90vh ">
                <h1>{{ LAConfigs::getByKey('sitename_part1') }} <b><a>{{ LAConfigs::getByKey('sitename_part2') }}</a></b></h1>
                <h3>{{ LAConfigs::getByKey('site_description') }}</h3>
                <h3><a href="{{ url('/login') }}" class="btn btn-lg btn-success">Inicia Sesion!</a></h3><br>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->

<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Contactenos</h3><br>
            <p>
				Edgardo Martinez,<br/>
				desarrollador Web,<br/>
                Mz 66 Casa 8,<br/>
                Urb. Don Alberto,<br/>
                Valledupar, Cesar, Colombia - 200005
            </p>
			<div class="contact-link"><i class="fa fa-envelope-o"></i> <a href="mailto:eemc78@hotmail.com">eemc78@hotmail.com</a></div>
			<div class="contact-link"><i class="fa fa-cube"></i> <a href="http://edgardomartinez.com">edgardomartinez.com</a></div>
        </div>


        <div class="col-lg-7">
            <h3>NUEVOS COMENTARIOS</h3>
            <br>
            {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                <div class="form-group">                    
                    {!!Form::text('name', null,['placeholder'=> 'Nombre',  'class'=>'form-control' ])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('email', null,['placeholder'=> 'Email',  'class'=>'form-control' ])!!}
                </div>
                <div class="form-group">
                    {!!Form::textarea('mensaje', null,['placeholder'=> 'Mensaje',  'class'=>'form-control' ])!!}
                </div>
                <br>
                 {!! Form::reset('Limpiar', ['class' => 'btn btn-primary']) !!}
                {!!Form::submit('Enviar',['class'=>'btn btn-large btn-success'])!!}
            {!!Form::close()!!}
        </div>


    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2018  -  <a href="https://edgardomartinez.com"><b>eemc78@hotmail.com</b></a>
        </p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/la-assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>

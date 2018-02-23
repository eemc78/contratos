<head>
    <meta charset="UTF-8">
    <title>@hasSection('htmlheader_title')@yield('htmlheader_title') - @endif{{ LAConfigs::getByKey('sitename') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      
      <meta name="description" content="Gestión Administrativa Clinica integral de Emergencias Laura Daniela S.A.">
 <meta name="keywords" content="Gestión,Administrativa,Clinica,integral,Emergencias,Laura,Daniela,Contratos, Edgardo, Martinez,">

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
     <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->

  <!-- CORE CSS
 
  <link href="{{ asset('d/css/materialize.min.css') }}" rel="stylesheet"  type="text/css"  media="screen,projection" /> 
-->
  <link href="{{ asset('d/css/style.min.css') }}" rel="stylesheet"   media="screen,projection" /> 

  <!-- MARCA CSS -->
 <!--  @if(LAConfigs::getByKey('layout') == 'marca')-->
         <link href="{{ asset('d/css/marca.css') }}" rel="stylesheet"   media="screen,projection" /> 
  <!-- @endif  -->

    <!-- Custome CSS-->    
      <link href="{{ asset('css/custom/custom.min.css') }}" rel="stylesheet"  type="text/css"  media="screen,projection" /> 

  <link href="{{ asset('css/layouts/page-center.css') }}" rel="stylesheet"  media="screen,projection" /> 


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{ asset('js/plugins/prism/prism.css') }}" rel="stylesheet"  type="text/css"  media="screen,projection" /> 
  <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet"  type="text/css"  media="screen,projection" /> 


    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('la-assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('la-assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
    <link href="{{ asset('la-assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!--<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
    
    <!-- Theme style -->
    <link href="{{ asset('la-assets/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('la-assets/css/skins/'.LAConfigs::getByKey('skin').'.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('la-assets/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    @stack('styles')
    
</head>

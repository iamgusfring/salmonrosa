<!DOCTYPE html>
  <html>
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Language" content="es_ES">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
		<link rel="manifest" href="img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="ms-icon-144x144.html">
        <meta name="theme-color" content="#ffffff">


		<!--Import Google Icon Font-->
		<link href="css/materialicons.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" 
            src="{{ asset('mkt/css/font-awesome.min.css') }}">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" 
            src="{{ asset('mkt/css/materialize.css') }}"/>
		<link type="text/css" rel="stylesheet" 
            src="{{ asset('mkt/css/perfect-scrollbar.min.css') }}"/>
		<link type="text/css" rel="stylesheet" 
            src="{{ asset('mkt/css/datatables.min.css') }}"/>
		<link rel="stylesheet" type="text/css" 
            src="{{ asset('mkt/css/DateTimePicker.css') }}"/>
		<link rel="stylesheet" type="text/css"
            src="{{ asset('mkt/css/basic.min.css') }}"/>
		<link rel="stylesheet" type="text/css" 
            src="{{ asset('mkt/css/dropzone.min.css') }}"/>
		<link rel="stylesheet" type="text/css" 
            src="{{ asset('mkt/css/magnific-popup.css') }}">
		<link rel="stylesheet" type="text/css"
            src="{{ asset('mkt/css/sweetalert.css') }}">
		<link rel="stylesheet" type="text/css" 
            src="{{ asset('mkt/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" 
            src="{{ asset('mkt/css/jstree/default/style.min.css') }}">


		<link href="{{ asset('mkt/css/jstree/default/style.min.css') }}" rel="stylesheet">
		<link href="{{ asset('mkt/css/estilo.css') }}" rel="stylesheet">
		<!--Let browser know website is optimized for mobile-->

		<script src="{{ asset('mkt/js/sweetalert.min.js') }}"></script>
		<script src="{{ asset('mkt/js/json2.js') }}"></script>
		

		<title>Diunsa - Panel Administrativo</title>

    </head>

    <body>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<header class="page-topbar navbar-fixed">
		<nav id="topbar" class="light-blue darken-4" role="navigation">
			<div class="nav-wrapper">
				<a id="logo-container" href="#" class="brand-logo">DIUNSA</a>
			</div>
		</nav>
		<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only orange darken-3">
			<i class="material-icons small">menu</i>
		</a>
	</header>
			<script type="text/javascript" src="js/sha512.js"></script>
		<div id="loginform" class="col z-depth-1">
			<h4 class="center">Ingreso de Credenciales</h4>
			<p></p>
			<form action="https://mkt.diunsa.hn/inicio" method="post">
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="idusuario" name="idusuario" class="validate mt-input" type="text">
						<label class="" for="icon_prefix">Usuario</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input id="passw" name="passw" type="hidden">
						<input id="p" name="p" class="validate mtimput" type="password">
						<label for="icon_passw">Contraseña</label>
					</div>
					<div class="col s12 center">
						<button class="btn orange darken-3 waves-effect waves-light" type="submit" onclick="javascript:encriptarpassw()">
							<i class="material-icons left">send</i>Ingresar
						</button>
					</div>
				</div>
			</form>
		</div>
		<script>
			function encriptarpassw(){
				var passwenc = hex_sha512($("#p").val());
				$("#passw").val(passwenc);
				$("#p").val("");
			}
		</script>
	

    </body>
  

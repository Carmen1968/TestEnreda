<html>
<?php

	if (isset($this->session->userdata['logged_in'])) {
		$username = ($this->session->userdata['logged_in']['username']);
	} else {
		header("location: login");
	}
?>

<head>
	<title> Página principal </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
		echo "¡Bienvenida <b id='welcome'><i>" . $username . "</i> !</b>";
    ?>

	<br/>
	<br>
    <div class="vertical-menu">
	  <a href="#" class="active">Escoge una opción: </a>
	  <a href="ver">Consultar Factura</a>
	  <a href="#">Añadir Factura</a>
	  <a href="#">Editar Factura</a>
	  <a href="#">Eliminar Factura</a>
	</div>

	<b id="logout"><a href="logout">Salir</a></b>
	<br/>
</body>
</html>

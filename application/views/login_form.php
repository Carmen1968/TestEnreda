<html>
<?php

	if (isset($this->session->userdata['logged_in'])) {
		header("location: http://localhost/ProyectoEnreda/application/controllers/user_authentication/user_login_process"); 
	}

?>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
		if (isset($logout_message)) {
			echo "<div class='message'>";
			echo $logout_message;
			echo "</div>";
		}
	?>
	<?php
		if (isset($message_display)) {
			echo "<div class='message'>";
			echo $message_display;
			echo "</div>";
		}
	?>
	<div id="main">
	<div id="login">
	<h2>Inicio de sesión</h2>
	<hr/>
	<?php echo form_open('user_authentication/user_login_process'); ?>
	<?php
		echo "<div class='error_msg'>";
		if (isset($error_message)) {
			echo $error_message;
		}
		echo validation_errors();
		echo "</div>";
		?>
		<label> Usuaria:</label>
		<input type="text" name="username" id="name" placeholder="Introduce nombre"/><br /><br />

		<label> Contraseña:</label>
		<input type="password" name="password" id="password" placeholder="*************"/><br/><br />

		<input type="submit" value=" Iniciar sesión " name="submit"/><br />
		<a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show"> ¿Eres nueva? Regístrate</a>
	<?php echo form_close(); ?>
	</div>
	</div>
</body>
</html>
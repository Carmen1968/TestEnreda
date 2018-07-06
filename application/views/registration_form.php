<html>
<?php

	if (isset($this->session->userdata['logged_in'])) {
		header("location: http://localhost/login/index.php/user_authentication/user_login_process");
	}
?>
<head>
	<title> Nueva usuaria </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="main">
	<div id="login">
	<h2>Regístrate</h2>
	<hr/>
	<?php
		echo "<div class='error_msg'>";
		echo validation_errors();
		echo "</div>";

		echo form_open('user_authentication/new_user_registration');
		echo form_label('Nueva usuaria: ');
		echo"<br/>";

		echo form_input('username');
		echo "<div class='error_msg'>";
		if (isset($message_display)) {
			echo $message_display;
		}
		echo "</div>";
		echo"<br/>";

		echo form_label('Contraseña: ');
		echo"<br/>";

		echo form_password('password');
		echo"<br/>";
		echo"<br/>";

		echo form_submit('submit', 'Regístrate');
		echo form_close();
	?>
	
	<a href="<?php echo base_url() ?> ">Volver</a>
	</div>
	</div>
</body>
</html>

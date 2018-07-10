<?php
$user = $_POST['user'];
$password = $_POST['contraseña'];

if ($user = "hypertech" && $password = "sistemas2018" ) {
	header('Location: /emitir.html');
}else{
	echo "contraseña incorrecta";
	header('Location: /index.html');
}

?>
<form name="f1" action="login.proc.php" method="get">
	<input type="text" name="mail" placeholder="Correo" maxlength="50">
    <input type="password" name="pass" class="form-control" placeholder="Contraseña">
	<button type="submit" name="acce">Entrar</button>
	<button type="button" onclick="">Registrarme</button>  
</form>
<?php
	if(isset($error)){
		echo "ERROR: " . $error;
		echo "<br/><br/>";
	}
echo "</div>";
?>		
registrarProfesores.php
<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD	XHTML 1.0	Transitional//EN"
	"http://www.w3.org/TR/xhtm11/DTD/xhtm11-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/XHTML">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style.css" rel="stylesheet" type="text/css">
	<script language="JavaScript">
		var d=new Date();
		var m= d.getMonth () + 1;
		var y= d.getFullYear();
		function validar (f){
			f.submit();
		}
	</script>
	</head>
	<body topmargin="0"	leftmargin="0">
	<?php
		if (($_SESSION["User"]==null) or ($_SESSION["password"]==null)){
			header('Location: index.html');
		}	else{
			include "parametros.php";
			$c=$_POST["cedulaP"];
			$n=$_POST["nombreP"];
			$a=$_POST["apellidoP"];
			$fec=$_POST["dia"]."-". $_POST["mes"]."-". $_POST["año"];
			$ln=trim($_POST["estado"]."-". $_POST["municipio"]."-". $_POST["parroquia"]);//$_POST["lnacP"]
			$e=$_POST["edadP"];
			$s=$_POST["sexoP"];
			$t=$_POST["codTelfP"]."-". ["telfP"];
			$d=$_POST["direccionP"];
			$cp=$_POST["cargoP"];
			$cop=$_POST["codigoP"];
			$cc=$_POST["codigoC"];
			$cd=$_POST["codigoD"];
			$nh=$_POST["numHoras"];
			$fecl=$_POST["añol"]."-".$_POST["mesl"]."-".$_POST["dial"];
			$result = mysql_num_rows(result);
				if ($filas!=0) {
							$sql="INSERT INTO profesor (cedula, nombre, apellido, fecha_nac, lugar_nac, edad, sexo, telefono, direccion, cargo, cod_cargo, cod_profesor, cod_dependencia, num_horas, fecha_ingreso) VALUES ('$c', '$n', '$a', '$fec', '$ln', '$e', '$s', 't', '$d', '$cp', '$cc', '$cop', '$cd', '$nh', '$fecl')";
							echo "<img src='img/logo revolucion.JPG'	border='0'	width='100%'/>";
							include "header_menu.php";
								if(mysql_query($sql)){
									//$sql="INSERT INTO usuario(username, password, cedula) VALUES ('$c', 12345, '$c')";
									//mysql_query($sql);
									echo "<HR/> <p class='titulo2'> El Profesor fue registrado con exito </p> <HR/> <br/> <br/>";
									//echo "<p class='subTitulo'> Los datos de entrada al Sistema son: /n Usuario: ".$c." Contraseña: 12345 </p> <HR> <br/> <br/>";
							}
								else{
									echo "<HR/> <p class='titulo2'> Ocurrio un error al registrar al profesor </p><HR/><br/><br/>";

							}

								echo "<form name='registrol' action='registroProfesores.php' method='post'> <table border='0' align='center' width='40%'>
									<tr><td align='center'> <input type='button'	name='Submit'	value='attributes' onclick='validar(this.form)'/></td>
									</tr></table></form>";
							}
								else{
									$_SESSION["rep"]=$c;
									header('Location: registroProfesores.php');
								}
							}
						?>
					</body>
					</html>
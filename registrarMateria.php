registrarMateria.php
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
				$n=$_POST["nombre"];
				$sql="INSERT INTO materia (nombre) VALUES ('$n')";
				echo "<img src='img/logo revolucion.JPG' border='0'	width='100%'/>";
				include "header_menu.php";
				if(mysql_query($sql)){
					echo "<HR/> <p class='titulo2'> La Materia fue registrada con exito </p> <HR/> <br/> <br/>";
				}
						else{
								echo "<HR/> <p class='titulo2'> Ocurrio un error al registrar los datos </p><HR/><br/><br/>";

							}

								echo "<form name='registrol' action='registroMateria.php' method='post'> <table border='0' align='center' width='40%'>
									<tr><td align='center'> <input type='button'	name='Submit'	value='attributes' onclick='validar(this.form)'/></td>
									</tr></table></form>";
							}						
						?>
					</body>
					</html>
registrarEstudiantes.php
<?php
	session_start();
?>
	<!DOCTYPE	html	PUBLIC	"-//W3C//DTD	XHTML	1.0	Transitional//EN"
	"http://www.w3.org/TR/XHTML11/DTD/XHTML11-transitional.DTD">
	<html xmlns="http://www.w3.org/1999/XHTML">
	<head>
		<meta http-equiv="Content-Type"	content="text/html;	charset=utf-8" />
		<link  href="style.css" rel="stylesheet" type="text/css" >
		<script language="JavaScript">
			var d=new Date();
			var m=new d.getMonth() + 1;
			var y= d.getFullYear();
			function validar (f){
				f.submit();
			}
			</script>
			<title> Registro de Estudiantes </title> 
	</head>
	<body topmargin="0"	letfmargin="0">
		<?php
			if(($_SESSION ["user"]==null) or ($_SESSION["password"]==null)){
				header('Location:index.html');			
			}	else{
					include "parametros.php";
					$muni = $_GET['codmuni'];
					// $edo = $_POST['estados'];
					$c=$_POST["cedulaE"];
					$n=$_POST["nombreE"];
					$a=$_POST["apellidoE"];
					$fec=$_POST["dia"]. "-". $_POST["mes"]. "-". $_POST["año"];
					// $queryMuni = mysql_query("SELECT m.descripcion as municipio,	e.descripcion as estado") 
					/// From municipio m, estado e 
					// Where m.id = $muni AND e.id = $edo");
						//$rowMuni = mysql_fetch_array ($queryMuni);
						//$ln=$_POST["InacE"];
						//$ln=rowMuni["estado"]. "-". $rowMuni["municipio"]; $ln = trim($_POST["estado"]. "-". $_POST["municipio"]. "-". $_POST["parroquia"]);
					$e=$_POST["edadE"];
					$s=$_POST["sexoE"];
					$ta=$_POST["tallaE"];
					$p=$_POST["pesoE"];
					$t=$_POST["codTelfE"]. "-".	$_POST["telfE"];
					$d=$_POST["direccionE"];
					$cr=$_POST["cedulaE"];
					$pr=$_POST["parentescoE"];
					$result = mysql_query("SELECT * FROM representante WHERE cedula=".$cr, $link);
					$filas=mysql_num_rows($result);
						if ($filas!=0) {
							$sql="INSERT INTO Estudiantes(cedula, nombre, apellido, fecha_nac, lugar_nac, edad, sexo, talla, peso, telefono, direccion, cod_representante, parentesco) VALUES ('$c', '$n', '$a', '$fec', '$ln', '$e', '$s', 'taC', '$p', '$t', '$d', '$cr', '$pr')";
							echo "<img src='img/logo revolucion JPG' border='0'	width='100%/>'";

							include "header_menu.php";
								if(mysql_query($sql)){
									//$sql="INSERT INTO usuario(username, password, cedula) VALUES ('$c', 12345, '$c')";
									//mysql_query($sql);
									echo "<HR/> <p class='titulo2'> El estudiante fue registrado con exito </p>";
									//echo "<p class='subTitulo'> Los datos de entrada al Sistema son: /n Usuario: ".$c." Contraseña: 12345 </p> <HR> <br/> <br/>";
							}
								else{
									echo "<HR/> <p class='titulo2'> Ocurrio un error al registrar al estudiante. El mismo puede ya estar registrado </p><HR/><br/><br/>";

							}

								echo "<form name='registrol' action='registroEstudiantes.php' method='post'> <table border='0' align='center' width='40%'>
									<tr><td align='center'> <input type='button'	name='Submit'	value='attributes' onclick='validar(this.form)'/></td>
									</tr></table></form>";
							}
								else{
									$_SESSION["REP"]=$cr;
										?>
									<script type="text/JavaScript">	
										window.Location="registroEstudiantes.php?msj=a1";
									</script>
									<!--$_SESSION["rep"]=$cr;
										header('Location: registroEstudiantes.php'); -->
										<?php
									}
								?>
							</body>
							</html>
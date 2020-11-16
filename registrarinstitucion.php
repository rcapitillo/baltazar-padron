registrarinstitucion.php
<?php
	session_start();
?>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<link href="styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
var d=new Date();
var m= d.getMonth() + 1;
var y= d.getFullYear();
</script>
</head>
<body topmargin="0" leftmargin="0">
<?php>

	if (($_SESSION["user"]==null) or ($_SESSION["password"]==null))
		{header('Location; index.html');}
			else{
				include"parametros.php";
			$c=$_POST["codigoI"];
			$cins=$_POST["codigoIns"];
			$n=$_POST["nombreI"];
			$a=$_POST["ciudadI"];
			$t=$_POST["codTlfI"]. "-".$_POST["tlfI"];
			$d=$_POST["direccionI"];
			$m=$_POST["municipioI"];
			$z=$_POST["zonaI"];
				$sql="INSERT INTO institucion (codigo_dea, codigo_Ins, nombre, ciudad, telefono, direccion, municipio, zona_educativa)
					VALUES ('$c','$cins','$n','$a','$t','$d','$m','$z');
							echo	"<img	src='img/logo	revolucion..JPG	border='0'
							width='100%'>";
								include "header_menu.php";
								if(myspl_query($sql)){
									echo "<img src='img/logo	revolucion.JPG'	alt="image not loading"	border='0'	width='100%'/>";
										include "header_menu.php";
										if(mysql_query($sql)){
											echo "<HR/> <p class='titulo2'> La institucion fue registrada con Exito <p/> <HR/> <br/> <br/>";
										}
									else{
										echo "<HR/> <p class='titulo2'> Ocurrio un error al registrar los datos <p/> <HR/> <br/> <br/>";
										}	
								}
								?>
								</body>
								</html>

<?
	date_default_timezone_set('America/Bogota'); 
	$fec = date('Y-m-d H:i:s');

	$mail = $_POST['mail'];
	$mes = $_POST['mes'];

	$ins = 'INSERT INTO at_respona (mail, mes, date) 
			VALUES ("'.$mail.'", "'.$mes.'", "'.$fec.'") ';
	$res = mysql_query($ins);
	if(!$res){
		echo 'Problemas a insertar datos de contacto:' . mysql_error() . "\n";
	}else
	{
		echo "<script>alert('Contacto ingresado exitosamente!');</script>";	
		?>
		<script language='javascript'>window.location='index.html'</script>;";
		<?
	}
?>
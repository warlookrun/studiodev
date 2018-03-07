<?php
/*
define("HOST", "localhost"); //El alojamiento al que deseas conectarte.
define("USER", "root"); //El nombre de usuario de la base de datos.
define("PASSWORD", ""); //La contraseña de la base de datos.
define("DATABASE", "totalsmart"); //El nombre de la base de datos.
*/

define("HOST", "https://vps70161.ovh.net:2083/"); //El alojamiento al que deseas conectarte.
define("USER", "warlookr"); //El nombre de usuario de la base de datos.
define("PASSWORD", "W808nwC3pf"); //La contraseña de la base de datos.
define("DATABASE", "warlookr_test"); //El nombre de la base de datos.

/*
define("HOST", "totalsmart2.db.9663452.hostedresource.com"); //El alojamiento al que deseas conectarte.
define("USER", "totalsag"); //El nombre de usuario de la base de datos.
define("PASSWORD", "total@sag"); //La contraseña de la base de datos.
define("DATABASE", "totalsmart2"); //El nombre de la base de datos.
*/

$con = mysql_connect(HOST,USER,PASSWORD);

//Si te conectas a través de TCP/IP en lugar de un socket de UNIX recuerda agregar el número de puerto como un parámetro.

//$gbd = new PDO('mysql:host=localhost; dbname=test', $usuario, $contraseña);
//$pdo = new PDO('pgsql:host=192.168.137.1;port=5432;dbname=anydb', 'anyuser', 'pw');
//$pdo = new PDO('pgsql:host=192.168.137.1; port=5432; dbname=anydb', 'anyuser', 'pw');


if (!$con) 
{
    die('Error al conectarse a mysql: ' . mysql_error());
}
else
{
	echo "<script>alert('Conexión exitosa!');</script>";	
}
?>

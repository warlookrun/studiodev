<?php 

require_once 'conex.php'; 

#mysql_set_charset('utf8');
$DBatlantidaTechnology = mysql_select_db(DATABASE, $con);
/*
if (!$DBatlantidaTechnology) {
    die ('Error al abrir la base de datos: ' . mysql_error());
}else {
 echo ' <br> Conexion exitosa a DB.';
}
*/
?>
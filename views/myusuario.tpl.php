<?php

$usuario02 = new Usuario();

?>
<html>
<head></head>
<body>

<h1><?php $titulo ?></h1>
<p><?php $contenido ?></p>
<p><?php $nombre ?></p>

<p> 
<?php 

	$usuario02->setUsuario(); 
    $usuario02->getUsuario();
	$usuario02->readUsuarioG();
	
?>
</p>	
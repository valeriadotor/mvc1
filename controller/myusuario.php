<?php
 
  $usuario=new Usuario();
  
  $titulo = 'Bienvenidos al myusuario';
  $contenido = 'Contenido de la variable ...';
  
  $variables = array ('titulo'=>$titulo, 'contenido'=>$contenido,
  'nombre'=>$usuario->setUsuario());
  
  view('myusuario', $variables);
 
?>
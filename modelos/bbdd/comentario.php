<?php


	function nuevo_comentario($id_usu, $id_ficha, $comentario){	
	
		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$sql = "INSERT INTO comentarios (id_usuario, id_recurso, comentario) VALUES (?,?,?)";
		$mbd->prepare($sql)->execute([$id_usu, $id_ficha, $comentario]);
		
    }


?>
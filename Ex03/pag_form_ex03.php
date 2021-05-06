<?php 

	$n=$_POST['nome'];
	$s=$_POST['senha'];
	if ($n=="etecia"&&$s=="etecia238") {
		echo "Autenticação realizada com sucesso";
	}else {
		echo "Você não tem permissão de visualizar esta página";
	}

 ?>
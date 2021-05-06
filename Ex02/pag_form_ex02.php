<?php 

	echo "Peso: ".$_POST['peso'];
	echo "<br>";
	$p=$_POST['peso'];
	echo "Altura: ".$_POST['altura'];
	$a=$_POST['altura'];
	echo "<br><br>";
	$imc=$p/($a*$a);
	//printf("O imc é: %.2f",$imc);
	if ($imc>=25) {
		echo "Você está acima do peso!";

	}else {
		echo "Você está saudável!";
	}


 ?>


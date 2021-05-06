<?php 

	echo "x: ".$_POST['ladox'];
	$x = $_POST['ladox'];
	echo "<br>";
	echo "y: ".$_POST['ladoy'];
	$y = $_POST['ladoy'];
	echo "<br><BR>";
	echo "Área: ".($x*$y);
	echo "<br><br>";
	echo "Perímetro: ".($x+$x+$y+$y);

 ?>
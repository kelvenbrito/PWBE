<?php 

	$nome = "Kelven";
	$idade = 25;

	echo ("Eu sou " . $nome . " e tenho " . $idade . " anos. <br>" );

	$frase = strtoupper("Programacao em php");
	print($frase . "<br>");

	$frase2 = "O PHP foi criado em mil novecentos e noventa e cinco";
	$frase2 = str_replace("o" , "0" , "$frase2");
	$frase2 = str_replace("a" , "4" , "$frase2");
	$frase2 = str_replace("i" , "1" , "$frase2");
	echo "$frase2 <br>";

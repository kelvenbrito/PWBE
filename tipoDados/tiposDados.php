<?php

	//String
	$str = "OLá mundo em php.";
	var_dump($str);


	if (is_string($str)):
		echo "É uma string.";
	else:
			echo "Não é uma variavel string";
	endif;

	echo "<br>";

$str2 = "Programação";
	 var_dump($str2);

	 echo "<hr>";


	 //inteiro
	 $numero = 4;
	 var_dump($numero);

	 echo "<br>";
	 	if (is_int($numero)):
		echo "É uma variavel inteira.";
	else:
			echo "Não é uma variavel inteira";
	endif;

	echo "<hr>";

	//ponto flutuante
	$real = 2.75;
	var_dump($real);
	echo "<br>";
	 	if (is_float($real)):
		echo "É uma variavel float.";
	else:
			echo "Não é uma variavel float";
	endif;

	echo "<hr>";

	//boolean
	$bool = false;
	var_dump($bool);
	
	echo "<br>";
	 	if (is_bool($bool)):
		echo "É uma variavel booleana.";
	else:
			echo "Não é uma variavel booleana";
	endif;

	echo "<hr>";

	//array
	$frutas = array("Melancia","Uva","Morango", 2,10.5,7);
	var_dump($frutas);
	echo "<br>";
	 	if (is_array($frutas)):
		echo "É uma array.";
	else:
			echo "Não é uma array";
	endif;

echo "<hr>";

	//objeto
	class Alunos{

		public $nome;
		public function nomeAluno($nome){
			$this->$nome = $nome;
		}

	}

	$aluno = new Alunos();
	$aluno->nomeAluno("João");
	var_dump($aluno);

	echo "<br>";

	 	if (is_object($aluno)):{
		echo "É um objeto.";
	}else:
			echo "Não é um objeto";
	endif;


		echo "<hr>";

	//NULL
	$saldo = NULL;
	var_dump($saldo);

		echo "<hr>";

		$i = 3;

		switch ($i) {
			case 0:
				echo "i é igual 0";
				break;
			case 1:
				echo "i é igual 1";
				break;
			case 2:
				echo "i é igual 2";
				break;			
			default:
				echo " i não é igual a 0, 1 ou 2";
				
		}






?>
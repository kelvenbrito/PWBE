<?php



function soma($n1, $n2){
		$retorno = ($n1 + $n2);
		return $retorno;
	}






function sub($n1, $n2){
		$retorno = ($n1 - $n2);
		return $retorno;
	}



	function mult($n1, $n2){
		$retorno = ($n1 *$n2);
		return $retorno;
	}


function div($n1, $n2){
		$retorno = ($n1 / $n2);
		return $retorno;
	}

	
echo "Digite o primeiro numero:\n";
$n1 = readline();

echo "Digite o segundo numero:\n";
$n2 = readline();


	echo "Digite a operação que deseja realizar \n";
	echo "+,-,*,/\n";
	$op = readline();

	switch ($op) {
		case '+':
			echo soma($n1,$n2);
			break;
		case '-':
			echo sub($n1,$n2);
			break;
		case '*':
			echo mult($n1,$n2);
			break;
		case '/':
		if ($n2 != 0) {
			echo div($n1,$n2);
		}else{
			echo "Não é possivel dividir por zero";
		}
			break;
		
		default:
			echo "valor invalido";
			break;
	}




?>
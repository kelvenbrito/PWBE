<?php 

	function notas($n1, $n2, $n3, $n4){
		$media = (($n1 + $n2 + $n3 + $n4 )/4);

	return $media;
	}



	$alunoM = notas(4,6,3,2);
	
	if ($alunoM >= 7.0) {
			echo "Aprovado ";
	}elseif ($alunoM >=5) {
		echo "Exame ";
	}else{
		echo "Reprovado ";
	}




	?>	}

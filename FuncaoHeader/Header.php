<?php

	$x = 10;

	if($x <= 5):
		header('Location: https://www.google.com.br');

	else:
		header('Location: https://www.kabum.com.br');
	endif;

?>
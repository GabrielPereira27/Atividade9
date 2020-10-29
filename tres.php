<?php 
	$num1 = rand(1, 10);
	$i = 1;
	while ($i <= 10) {
		$res = $num1 * $i;
		echo  $i .' x '. $num1 . ' = ' . $res . '<br>';
		$i++;
	}
?>
<?php 
	$media = rand(1, 20);
	switch ($media) {
		case ($media > 9.5):
			print("A média do aluno é $media o aluno está aprovado");
			break;

		case ($media > 8 && $media < 9.5):
			print("A média do aluno é $media o aluno foi admitido para ir a fase de recuperação");
			break;

		case ($media <= 8):
			print("A média do aluno é $media o aluno foi reprovado");
			break;
	}
?>
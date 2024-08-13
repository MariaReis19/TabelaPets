<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nomePet']);
		$idade = mysqli_escape_string($connection,$_POST['idadePet']);
		$raca = mysqli_escape_string($connection,$_POST['racaPet']);
		$obs = mysqli_escape_string($connection,$_POST['obsPet']);
		$nomeTutor = mysqli_escape_string($connection,$_POST['nomeTutor']);
		$email = mysqli_escape_string($connection,$_POST['emailTutor']);
		$cel = mysqli_escape_string($connection,$_POST['telCelular']);
		$codPet = mysqli_escape_string($connection,$_POST['codPet']);

		$sql = "UPDATE tbPets SET nomePet = '$nome', idadePet = '$idade', racaPet = '$raca', obsPet = '$obs', nomeTutor = '$nomeTutor' , emailTutor = '$email' , telCelular = '$cel' WHERE codPet = '$codPet'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}

<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {

		//sanitização
		
		$nome = mysqli_escape_string($connection,$_POST['nomePet']);
		$idade = mysqli_escape_string($connection,$_POST['idadePet']);
		$raca = mysqli_escape_string($connection,$_POST['racaPet']);
		$obs = mysqli_escape_string($connection,$_POST['obsPet']);
		$nomeTutor = mysqli_escape_string($connection,$_POST['nomeTutor']);
		$email = mysqli_escape_string($connection,$_POST['emailTutor']);
		$cel = mysqli_escape_string($connection,$_POST['telCelular']);
		

		$sql = "INSERT INTO tbPets(nomePet,idadePet,racaPet,obsPet,nomeTutor,emailTutor,telCelular)VALUES('$nome','$idade','$raca', '$obs','$nomeTutor','$email','$cel')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}




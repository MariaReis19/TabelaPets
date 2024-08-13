<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbPets WHERE codPet = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}



?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar pet</h3>
			
			<form action="php_action/alterar_pets.php" method="POST">

				<input type="hidden" name = "codPet" value="<?php echo $dados['codPet']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nomePet']; ?>">
					<label for="nome">Nome Pet</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="idade" id="idade" value="<?php echo $dados['idadePet']; ?>">
					<label for="idade">Idade Pet</label>
				</div>

					<div class="input-field col s12">
					<input type="text" name="raca" id="raca" value="<?php echo $dados['racaPet']; ?>"
					>
					<label for="sobrenome">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="obs" id="obs" value="<?php echo $dados['obsPet']; ?>">
					<label for="email">Observação</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="nomeTutor" id="nomeTutor" value="<?php echo $dados['nomeTutor']; ?>">
					<label for="nome">Nome Tutor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="email" id="email" value="<?php echo $dados['emailTutor']; ?>">
					<label for="idade">E-mail Tutor</label>
				</div>

					<div class="input-field col s12">
					<input type="text" name="cel" id="cel" value="<?php echo $dados['telCelular']; ?>"
					>
					<label for="sobrenome">Celular</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>
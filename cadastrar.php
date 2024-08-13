<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Pet</h3>
			
			<form action="php_action/criar_pets.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome Pet</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="idade" id="idade">
					<label for="idade">Idade Pet</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="raca" id="raca">
					<label for="raca">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="obsPet" id="obsPet">
					<label for="obsPet">Observações</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="nomeTutor" id="nomeTutor">
					<label for="nomeTutor">Nome Tutor</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="email" id="email">
					<label for="email">E-mail Tutor</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="cel" id="cel">
					<label for="cel">Celular Tutor</label>
				</div>
				

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>
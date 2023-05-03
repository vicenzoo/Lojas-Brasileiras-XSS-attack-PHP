<?php 

	// if(isset($_GET['submit'])){
	// 	echo $_GET['email'] . '<br />';
	// 	echo $_GET['name'] . '<br />';
	// 	echo $_GET['depoimento'] . '<br />';
	// }

	if(isset($_POST['submit'])){
		echo htmlspecialchars($_POST['email']) . '<br />';
		echo htmlspecialchars($_POST['name']) . '<br />';
		echo htmlspecialchars($_POST['depoimento']) . '<br />';
	}

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Adicionar depoimento</h4>
		<form class="white" action="add.php" method="POST">
			<label>Email</label>
			<input type="text" name="email">
			<label>Nome</label>
			<input type="text" name="name">
			<label>Depoimento</label>
			<input type="text" name="depoimento">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>
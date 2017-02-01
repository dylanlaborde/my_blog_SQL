<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
<h1>form</h1>
<?php 

if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content']) && !empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['content'])) {
	header('Location: http://0.0.0.0:4002/');
	exit();
}else{?>

<form action="/form.php" method="POST">
	
	<div>
		<?php if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content']) && empty($_POST['title']) && empty($_POST['author']) && empty($_POST['content'])): ?>
			<div class="ui error message">
				<div class="header">Erreur</div>
				<p>veuiller rensegner les champs</p>
			</div>
		<?php endif ?>
		<div>
			<label for="title">titre</label>
			<input type="text" name="title">
		</div>
		<div>
			<label for="author">auteur</label>
			<input type="text" name="author">
		</div>
		<label for="content">contenu</label>
		<div>
			<textarea name="content" id="content" cols="30" rows="10"></textarea>
		</div>
		<button type="submit">valider</button>
		
	</form>
	<?php } ?>
	




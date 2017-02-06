<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Ajouter votre article</title>
</head>
<body>
	<h1>Ajouter votre article</h1>

	<a href="/" class="ui button">Retour</a>
	<?php if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content']) && empty($_POST['title']) && empty($_POST['author']) && empty($_POST['content'])): ?>
		<div class="ui error message">
			<div class="header">Erreur</div>
			<p>veuiller rensegner les champs</p>
		</div>
	<?php endif ?>
	<form action="/Controllers/submit_post.php" method="post" class="ui form">
		<input type="hidden" name="id" value="">
		<div class="required field">
			<label for="title">titre</label>
			<input type="text" name="title">
		</div>
		<div class="required field">
			<label for="author">auteur</label>
			<input type="text" name="author">
		</div>
		<div class="required field">
			<label for="content">contenu</label>
			<textarea name="content" id="content" cols="30" rows="10"></textarea>
		</div>
		<button type="submit" class="positive ui button">Valider</button>
	</form>
</body>
</html>
<h1>form</h1>
<form action="/submit_post.php" method="POST">
	<div>
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
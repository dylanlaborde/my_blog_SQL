<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>My_Blog</title>
</head>
<body>
	<h4>liste des article !</h4>

	<a href="/Views/form.php" class="ui labeled button icon"><i class="add circle icon"></i>Ajouter un nouvelle article</a>

	<table class="ui table">
		<thead>
			<tr>
				<th>Titre</th>
				<th>Contenu</th>
				<th>ajoutée par</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($article as $key): ?>	
				<tr>
					<td><?= $key->title;?></td>
					<td><?= $key->content;?></td>
					<td><?= $key->author."\n"."le"."\n".$key->created_at?></td>
				</tr>		
			<?php endforeach ?>
		</tbody>
	</table>



	
</body>
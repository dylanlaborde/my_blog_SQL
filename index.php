<?php 
require 'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
$posts = ORM::for_table('posts')->find_many();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
<title>My_Blog</title>
<h1>mon blog</h1>

<h4>article ajoutée</h4>
<a href="/form.php">
<button>Ajouter un article</button>
	
</a>

<table class="ui celled table">
	<thead>
		<tr>
			<th>Titre</th>
			<th>contenue</th>
			<th>ajoutée par</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $key): ?>	
			<tr>
				<td><?= $key->title;?></td>
				<td><?= $key->content;?></td>
				<td><?= $key->author."\n"."le"."\n".$key->created_at?></td>
			</tr>		
		<?php endforeach ?>
	</tbody>
</table>


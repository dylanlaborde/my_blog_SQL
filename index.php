<?php 
require 'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
<h1>mon blog</h1>
<table class="ui celled table">
	<thead>
		<tr>
			<th>Titre</th>
			<th>contenue</th>
			<th>Nom de l'auteur / date Création</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>		
	</tbody>
</table>


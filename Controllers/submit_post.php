<?php 


if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content']) && empty($_POST['title']) && empty($_POST['author']) && empty($_POST['content'])) {
	  require __DIR__.'/../Views/form.php';

}



?>

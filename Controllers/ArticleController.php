<?php 

require __DIR__."/../Models/Article.php";

class ArticleController extends Article{


	public function home(){
	
	 $article =Article::allArticle();
	 require 'Views/home.php';

	}

}

?>
<?php 

require __DIR__.'/../vendor/autoload.php';

class Article {
	private $posts;

	public function __construct(){
		ORM::configure('mysql:host=localhost;dbname=my_blog');
		ORM::configure('username', 'root');
		ORM::configure('password', 'root');
		$this->posts=ORM::for_table('posts');

	}
	public function getArticle(){
		return $this->posts;
	}
	public static function allArticle(){
		$a = new self();
		$showArticle = $a->getArticle()
		->find_many();
		return $showArticle;
	}

}
 
?>
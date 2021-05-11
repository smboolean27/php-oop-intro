<?php
class Post {
	private $title;
	public $author;
	public $date;
	public $text;

	public function setTitle($_title) {
		if ( !empty($_title) ) {
			$this->title = $_title;
		}
	}

	public function getTitle() {
		return $this->title;
	}

	public function abstract($max = 40) {
		$abstract = substr($this->text, 0, $max)."...";
		return $abstract;
	}
}

$post_1 = new Post();
// $post_1->title = "Primo Articolo";
$post_1->setTitle("Primo Articolo");
$post_1->author = "Samuele";
$post_1->date = date('d-m-Y');
$post_1->text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, optio? Cupiditate iusto commodi nemo vel alias totam dolorem ex iste optio! Quae modi tenetur commodi repellat quis officia assumenda autem?";

$post_2 = new Post();
// $post_2->title = "Secondo Articolo";
$post_2->setTitle("Secondo Articolo");
$post_2->author = "Samuele";
$post_2->date = "08-05-2021";
$post_2->text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, optio? Cupiditate iusto commodi nemo vel alias totam dolorem ex iste optio! Quae modi tenetur commodi repellat quis officia assumenda autem?";

$post_3 = new Post();
// $post_3->title = "Secondo Articolo";
$post_3->setTitle("Terzo Articolo");
$post_3->author = "Samuele";
$post_3->date = "08-04-2021";
$post_3->text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, optio? Cupiditate iusto commodi nemo vel alias totam dolorem ex iste optio! Quae modi tenetur commodi repellat quis officia assumenda autem?";

$posts = [
	$post_1, 
	$post_2,
	$post_3
];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<?php foreach ($posts as $post) { ?>

			<h2><?php echo $post->getTitle(); ?></h2>
			<p><?php echo $post->author; ?> - data: <?php echo $post->date; ?></p>
			<p><?php echo $post->abstract(70); ?></p>

		<?php } ?>
	</body>
</html>
<?php
include_once __DIR__ . '/classes/post.class.php';
include_once __DIR__ . '/classes/user.class.php';

$user = new User("Samuele", "Madrigali", "samuele.madrigali@gmail.com");
$user_2 = new User("Tommaso", "Borsatti", "tommy.borsa@gmail.com");

$post_1 = new Post("Primo Articolo", $user, date('d-m-Y'), "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, optio? Cupiditate iusto commodi nemo vel alias totam dolorem ex iste optio! Quae modi tenetur commodi repellat quis officia assumenda autem?");
$post_2 = new Post("Secondo Articolo", $user, "08-05-2021", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, optio? Cupiditate iusto commodi nemo vel alias totam dolorem ex iste optio! Quae modi tenetur commodi repellat quis officia assumenda autem?");
$post_3 = new Post("Terzo Articolo", $user_2, "08-04-2021", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, optio? Cupiditate iusto commodi nemo vel alias totam dolorem ex iste optio! Quae modi tenetur commodi repellat quis officia assumenda autem?");

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
		<title>Blog Classe 27</title>
	</head>
	<body>
		<?php foreach ($posts as $post) { ?>

			<h2><?php echo $post->getTitle(); ?></h2>
			<p><?php echo $post->author->getFullName(); ?> - data: <?php echo $post->date; ?></p>
			<p><?php echo $post->abstract(70); ?></p>

		<?php } ?>
	</body>
</html>
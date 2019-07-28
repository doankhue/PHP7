<?php 
include_once('db.inc.php');

if(isset($_POST) && gettype($_POST) == 'array' ){
	$title = $_POST['title'];
	$content = $_POST['content'];

	$query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
	mysqli_query($conn,$query);
	header("Location: ../index.php?insertpost=success");

}


<?php

	if(isset($_POST['add-blog'])){
		include_once 'connection.php';
		$author = mysqli_escape_string($conn,$_POST['author']);
		$date = mysqli_escape_string($conn,$_POST['publishing-date']);
		$category = mysqli_escape_string($conn,$_POST['category']);
		$title = mysqli_escape_string($conn,$_POST['title']);
		$meta_title = mysqli_escape_string($conn,$_POST['meta-title']);
		$meta_desc = mysqli_escape_string($conn,$_POST['meta-desc']);
		$meta_tags = mysqli_escape_string($conn,$_POST['meta-tags']);
		$blog_content = mysqli_escape_string($conn,$_POST['blog-content']);

		$query = "insert into blogs values('$author','$date','$category','$title','$meta_title','$meta_desc','$meta_tags','$blog_content')";
		mysqli_query($conn,$query);
		mysqli_close($conn);
		$message = '<div class="alert alert-success">Blog Published Sucessfully !</div>';
		header('Location: index.php' );
	}

?>
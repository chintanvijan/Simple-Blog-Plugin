<?php

	if(isset($_POST['add-blog'])){
		include_once 'connection.php';
		$title = mysqli_escape_string($conn,$_POST['title']);
		$meta_title = mysqli_escape_string($conn,$_POST['meta-title']);
		$meta_desc = mysqli_escape_string($conn,$_POST['meta-desc']);
		$meta_tags = mysqli_escape_string($conn,$_POST['meta-tags']);
		$blog_content = mysqli_escape_string($conn,$_POST['blog-content']);

		$query = "insert into blogs values('$title','$meta_title','$meta_desc','$meta_tags','$blog_content')";
		mysqli_query($conn,$query);
		mysqli_close($conn);
		$message = '<div class="alert alert-success">Blog Published Sucessfully !</div>';
		header('Location: index.php' );
	}

?>
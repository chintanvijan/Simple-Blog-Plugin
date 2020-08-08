<!DOCTYPE html>
<html>
<head>
	<title>Simple Blog Plugin</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

	<script type="text/javascript">
	tinymce.init({
	  selector: 'textarea#blog-content',
	  height: 500,
	  menubar: false,
	  plugins: [
	    'advlist autolink lists link image charmap print preview anchor',
	    'searchreplace visualblocks code fullscreen',
	    'insertdatetime media table paste code help wordcount'
	  ],
	  toolbar: 'undo redo | formatselect | ' +
	  'bold italic backcolor | alignleft aligncenter ' +
	  'alignright alignjustify | bullist numlist outdent indent | ' +
	  'removeformat | help',
	  content_css: '//www.tiny.cloud/css/codepen.min.css'
	});
</script>

</head>
<body>
	<div class="container">
		<header>
			<h2>Add Blogs</h2>
		</header>
		<form action="upload-blog.php" method="POST">
			<?php 
			if(isset($message)){
			 echo $message; } ?>
			
			<input type="text" name="title" placeholder="Title" class="form-control mb-3">
			<input type="text" name="meta-title" placeholder="Meta Title" class="form-control mb-3">
			<textarea rows="5" placeholder="Meta Description" name="meta-desc" class="form-control mb-3"></textarea>
			<input type="text" name="meta-tags" placeholder="Meta Tags (Seprated by Commas)" class="form-control mb-3">
			<textarea rows="10" placeholder="Blog Content" name="blog-content" class="form-control mb-3" id="blog-content"></textarea>
			<button type="submit" name="add-blog" class="form-control mb-3 btn btn-primary">Add Blog</button>

		</form>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
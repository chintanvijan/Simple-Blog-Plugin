<?php
	include_once 'connection.php';
	$query = "CREATE TABLE IF NOT EXISTS blogs(author varchar(250), publish_date varchar(250), category varchar(250), title varchar(250),meta_title varchar(250),meta_desc varchar(2000),meta_tags varchar(250),blog_content varchar(50000));";
	mysqli_query($conn,$query);
	mysqli_close($conn);

?>
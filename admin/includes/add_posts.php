<?php
	ob_start();
	?>
  <form action ="" method="post" enctype="multipart/form-data">
	<div class = "form-group">
		<label for="title">POST TITLE </label>
		<input type="text" class="form-control" name="title">
	</div>



<div class = "form-group">
	<label for="title">POST Catagory</label>
	<select name="post_catagory" id="">
	<?php 
	$query = "SELECT * FROM catagories";
	$catagories = mysqli_query($connection,$query);
	confirmQuery($catagories);
	while ($row = mysqli_fetch_assoc($catagories)){
		$catagory_title = $row['cat_title'];
	?>
	
	<option><?php echo $catagory_title ?></option>
	
	<?php
	}
	?>
	</select>

	<div class="form-group">
		<label for="title">Post Author</label>
		<input type="text" class="form-control" name = "author">
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" class="form-control" name="post_status">
	</div>

	<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" name = "image">
	</div>

	<div class = "form-group">
		<label for="post_tags">Post Tags</label>
		<input type="text" class="form-control" name="post_tags">
	</div>

	<div class="form-group">
		<label for="post_content">Post Content</label>
		<textarea class="form-control" name="post_content" id="" cols="30" rows="10">
		</textarea>
	</div>

	<div class = "form-group" method="post">
<input class = "btn btn-primary" type="submit" name = "submit_add_post" value="add post">
</div>
</form>
</div>

<?php
if (isset($_POST['submit_add_post']))
{
 $post_title = $_POST['title'];
 $post_author = $_POST['author'];
 $post_catagory = $_POST['post_catagory'];
 $post_status = $_POST['post_status'];
 $post_image = $_FILES['image']['name'];
 $post_image_temp = $_FILES['image']['tmp_name'];

 $post_tags = $_POST['post_tags'];
 $post_content = $_POST['post_content'];
 $post_date = date('d-m-y');
 $post_comment_count = 0;
}

if(isset($post_catagory))
{
	

$query_catagory_sync = "SELECT * FROM catagories WHERE cat_title = '{$post_catagory}'"; 
$catagory_query = mysqli_query($connection,$query_catagory_sync);
confirmQuery($catagory_query);
            while ($row = mysqli_fetch_assoc($catagory_query))
            {
               $cat_id = $row['cat_id'];
            }
$post_catagory_id = $cat_id;
move_uploaded_file($post_image_temp, "../images/$post_image");


$query = "INSERT INTO `Posts` (`post_catagory_id`,`post_catagory`, `post_title`, `post_author`,`post_date`, `post_image`, `post_content`, `post_tag`, `post_comment_count`,`post_status`) VALUES ('{$post_catagory_id}','{$post_catagory}', '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}','{$post_tags}', '{$post_comment_count}', '{$post_status}')";

$insert_post = mysqli_query($connection,$query);

if (!$insert_post)
	{
		die ("Query failed " . mysqli_error($connection));
	}
else{
	header("Location: posts.php");
	}
}


?>
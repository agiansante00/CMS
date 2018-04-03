<?php
ob_start();
if (isset($_GET['p_id'])){

	$post_id_edit = $_GET['p_id'];
	$query = "SELECT * FROM Posts WHERE post_id = {$post_id_edit}"; 
	$query_results = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_results))
    {
    $post_id = $row['post_id'];
    $post_catagory_id = $row['post_catagory_id'];
    $post_catagory = $row['post_catagory'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tag = $row['post_tag'];
    $post_comment_count = $row['post_comment_count'];
    $post_status = $row['post_status'];
	}
}
?>




  <form action ="" method="post" enctype="multipart/form-data">
	<div class = "form-group">
		<label for="title">POST TITLE </label>
		<input value = "<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
	</div>


<div class = "form-group">
	<label for="title">CATAGORY</label>
	<select name="post_catagory" id="">
	<option><?php echo $post_catagory ?></option>
	<?php 
$query = "SELECT * FROM catagories WHERE cat_title != '{$post_catagory}'";
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
	</div>

	<div class="form-group">
		<label for="title">Post Author</label>
		<input value = "<?php echo $post_author; ?>" type="text" class="form-control" name = "post_author">
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input value = "<?php echo $post_status; ?>" type="text" class="form-control" name="post_status">
	</div>

	
	<div class="form-group">
		<label for="post_image">Post Image</label>
		<img width = 100 src="../images/<?php echo $post_image; ?>" alt="">
		<input type="file" name = "image">
	</div>


	<div class = "form-group">
		<label for="post_tags">Post Tags</label>
		<input value = "<?php echo $post_tag; ?>" type="text" class="form-control" name="post_tags">
	</div>

	<div class="form-group">
		<label for="post_content">Post Content</label>
		<textarea  class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content; ?></textarea>
	</div>

	<div class = "form-group" method="post">
<input class = "btn btn-primary" type="submit" name = "submit_edit_post" value="append post">
</div>
</form>
</div>

<?php
include ('includes/edit_post_update.php');
?>

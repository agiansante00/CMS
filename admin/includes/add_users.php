
  <form action ="" method="post" enctype="multipart/form-data">
	<div class = "form-group">
		<label for="title">UserName </label>
		<input type="text" class="form-control" name="user_name">
	</div>
<div class="form-group">
		<label for="title">User Password</label>
		<input type="password" class="form-control" name = "user_password">
	</div>
	<div class="form-group">
		<label for="title">Re-Enter Password</label>
		<input type="password" class="form-control" name = "user_password_confirm">
	</div>

<div class = "form-group">
		<label for="post_tags">User Email</label>
		<input type="email" class="form-control" name="user_email">
	</div>


<div class = "form-group">
	<label for="title">User Role</label>
	<select name="user_role" id="">
	<option>Admin</option>
	<option>User</option>
	<option>Guest</option>
	</select>

	<div class="form-group">
		<label for="title">User First Name</label>
		<input type="text" class="form-control" name = "user_firstname">
	</div>

	<div class="form-group">
		<label for="post_status">User Last Name</label>
		<input type="text" class="form-control" name="user_lastname">
	</div>

	<div class="form-group">
		<label for="post_image">User Image</label>
		<input type="file" name = "user_image">
	</div>

	<div class = "form-group">
		<label for="post_tags">User randSait</label>
		<input type="text" class="form-control" name="user_randSait">
	</div>


	<div class = "form-group" method="post">
<input class = "btn btn-primary" type="submit" name = "submit_add_user" value="add user">
</div>
</form>
</div>

<?php
if (isset($_POST['submit_add_user']))
{
 $user_name = $_POST['user_name'];
 $user_password = $_POST['user_password'];
 $user_password_confirm = $_POST['user_password_confirm'];
 $user_email = $_POST['user_email'];
 $user_firstname = $_POST['user_firstname'];
 $user_lastname = $_POST['user_lastname'];
 $user_image = $_FILES['user_image']['name'];
 $user_image_temp = $_FILES['user_image']['tmp_name'];
 $user_role = $_POST['user_role'];
 $user_randSait= $_POST['user_randSait'];


move_uploaded_file($user_image_temp, "../images/$user_image");



$query = "INSERT INTO `users` (`user_name`,`user_password`, `user_email`, `user_firstname`,`user_lastname`, `user_image`, `user_role`, `user_randSait`) VALUES ('{$user_name}','{$user_password}', '{$user_email}', '{$user_firstname}', '{$user_lastname}', '{$user_image}','{$user_role}', '{$user_randSait}')";


$insert_user = mysqli_query($connection,$query);

if (!$insert_user)
	{
		die ("Query failed " . mysqli_error($connection));
	}
else{
	header("Location: users.php");
	}
}


?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php include '/cms/includes/db.php'; ?>

<?php
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
$query = "SELECT * FROM `users` WHERE `user_name` = '$username'"; 
$query_results = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($query_results))
 {
$user_name = $row['user_name'];
$user_password = $row['user_password'];
$user_password_confirm = $row['user_password_confirm'];
$user_email = $row['user_email'];
$user_firstname = $row['user_firstname'];
$user_lastname = $row['user_lastname'];
$user_image = $row['user_image'];
$user_role = $row['user_role'];
$user_randSait = $row['user_randSait'];
}
}
?>
  <form action ="" method="post" enctype="multipart/form-data">
	<div class = "form-group">
		<label for="title">UserName </label>
		<input type="text" class="form-control" name="user_name" value='<?php echo $username; ?>'>
	</div>
<div class="form-group">
		<label for="title">User Password</label>
		<input type="password" class="form-control" name = "user_password" value='<?php echo $user_password; ?>'>
	</div>
	<div class="form-group">
		<label for="title">Re-Enter Password</label>
		<input type="password" class="form-control" name = "user_password_confirm" value='<?php echo $user_password_confirm; ?>'>
	</div>

<div class = "form-group">
		<label for="post_tags">User Email</label>
		<input type="email" class="form-control" name="user_email" value='<?php echo $user_email; ?>'>
	</div>

<?php
if ($user_role == "Admin"){ ?>
<div class = "form-group">
	<label for="title">User Role</label>
	<select name="user_role" id="">
	<option>Admin</option>
	<option>User</option>
	<option>Guest</option>
	</select>
<?php }
?>

<?php
if ($user_role == "User"){ ?>
<div class = "form-group">
	<label for="title">User Role</label>
	<select name="user_role" id="">
	<option>User</option>
	<option>Admin</option>
	<option>Guest</option>
	</select>
<?php }
?>

<?php
if ($user_role == "Guest"){ ?>
<div class = "form-group">
	<label for="title">User Role</label>
	<select name="user_role" id="">
	<option>Guest</option>
	<option>User</option>
	<option>Admin</option>
	</select>
<?php }
?>
<br>
	<div class="form-group">
		<label for="title">User First Name</label>
		<input type="text" class="form-control" name = "user_firstname" value='<?php echo $user_firstname; ?>'>
	</div>

	<div class="form-group">
		<label for="post_status">User Last Name</label>
		<input type="text" class="form-control" name="user_lastname" value='<?php echo $user_lastname; ?>'>
	</div>

<div class="form-group">
		<label for="post_image">User Image</label>
		<img width = 100 src="../images/<?php echo $user_image;?>" alt="">
		<input type="file" name = "user_image">
	</div>


	<div class = "form-group">
		<label for="post_tags">User randSait</label>
		<input type="text" class="form-control" name="user_randSait" value='<?php echo $user_randSait; ?>'>
	</div>


	<div class = "form-group" method="post">
<input class = "btn btn-primary" type="submit" name = "submit_edit_users" value="edit user">
</div>
</form>
</div>

<?php
include ('includes/edit_loggedin_users_update.php');
?>

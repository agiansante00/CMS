 <?php

if (isset($_POST['submit_edit_users']))
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
    
 move_uploaded_file($post_image_temp, "../images/$user_image");

    if(empty($user_image))
    {
	$img_query = "SELECT * FROM users WHERE user_id = '{$user_id_edit}'"; 
	$query_results = mysqli_query($connection,$img_query);

	while ($u_row = mysqli_fetch_assoc($query_results))
	    {
	    $user_image = $u_row['user_image'];
		}
	}
	$update_query = "UPDATE `users` 
	SET `user_name` = '$user_name', 
	`user_password` = '$user_password', 
	`user_firstname` = '$user_firstname', 
	`user_lastname` = '$user_lastname', 
	`user_email` = '$user_email', 
	`user_image` = '$user_image', 
	`user_role` = '$user_role', 
	`user_randSait` = '$user_randSait' 
	WHERE `users`.`user_id` = {$user_id_edit}";

	$update_user = mysqli_query($connection,$update_query);
	confirmQuery($update_user);
	header("Location: users.php");
}
?> 

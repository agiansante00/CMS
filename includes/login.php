<?php include 'db.php'; ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php
if (isset($_POST['login']))
{
$username = $_POST['user_login'];
$password = $_POST['user_password'];

$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);

$query = "SELECT * FROM `users` WHERE `user_name` LIKE '{$username}'";
$check_username = mysqli_query($connection,$query);

	if (!isset($check_username))
	{
		die ("Error");
	}

	while ($row = mysqli_fetch_assoc($check_username))
	{
		$db_user_id = $row['user_id'];
		$db_username = $row['user_name'];
		$db_password = $row['user_password'];
		$db_user_firstname = $row['user_firstname'];
		$db_user_lastname = $row['user_lastname'];
		$db_user_role = $row['user_role'];
	}

if ($username == $db_username && $password == $db_password)
	{

	$_SESSION['username'] = $db_username;
	$_SESSION['firstname'] = $db_user_firstname;
	$_SESSION['lastname'] = $db_user_lastname;
	$_SESSION['role'] = $db_user_role;

	header("Location: ../admin");

	} 
	else 
	{
	header("Location: ../index.php");
	} 
}

?>